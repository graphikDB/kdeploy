package helm

import (
	"context"
	"github.com/autom8ter/kubego"
	meshpaaspb "github.com/autom8ter/meshpaas/gen/grpc/go"
	"github.com/autom8ter/meshpaas/internal/logger"
	"github.com/golang/protobuf/ptypes/empty"
	"go.uber.org/zap"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	"helm.sh/helm/v3/pkg/repo"
)

type Helm struct {
	logger *logger.Logger
	client *kubego.Helm
}

func NewHelm(logger *logger.Logger, repos []*repo.Entry) (*Helm, error) {
	client, err := kubego.NewHelm()
	if err != nil {
		return nil, err
	}
	for _, r := range repos {
		logger.Debug("adding helm repository",
			zap.String("name", r.Name),
			zap.String("url", r.URL),
		)
		if err := client.AddRepo(r); err != nil {
			return nil, err
		}
	}
	if err := client.UpdateRepos(); err != nil {
		return nil, err
	}
	return &Helm{client: client, logger: logger}, nil
}

func (h Helm) GetApp(ctx context.Context, ref *meshpaaspb.AppRef) (*meshpaaspb.App, error) {
	release, err := h.client.Get(ref.Namespace, ref.Name)
	if err != nil {
		return nil, err
	}
	return h.toApp(release)
}

func (h Helm) ListApps(ctx context.Context, ref *meshpaaspb.NamespaceRef) (*meshpaaspb.Apps, error) {
	releases, err := h.client.ListReleases(ref.Name)
	if err != nil {
		return nil, err
	}
	return h.toApps(releases)
}

func (h Helm) UninstallApp(ctx context.Context, ref *meshpaaspb.AppRef) (*empty.Empty, error) {
	_, err := h.client.Uninstall(ref.Namespace, ref.Name)
	if err != nil {
		return nil, err
	}
	return &empty.Empty{}, nil
}

func (h Helm) RollbackApp(ctx context.Context, ref *meshpaaspb.AppRef) (*meshpaaspb.App, error) {
	if err := h.client.Rollback(ref.Namespace, ref.Name); err != nil {
		return nil, err
	}
	return h.GetApp(ctx, ref)
}

func (h Helm) InstallApp(ctx context.Context, input *meshpaaspb.AppInput) (*meshpaaspb.App, error) {
	release, err := h.client.Install(input.Namespace, input.Chart, input.AppName, true, input.Config)
	if err != nil {
		return nil, err
	}
	return h.toApp(release)
}

func (h Helm) UpdateApp(ctx context.Context, input *meshpaaspb.AppInput) (*meshpaaspb.App, error) {
	release, err := h.client.Upgrade(input.Namespace, input.Chart, input.AppName, true, input.Config)
	if err != nil {
		return nil, err
	}
	return h.toApp(release)
}

func (h Helm) SearchTemplates(ctx context.Context, filter *meshpaaspb.Filter) (*meshpaaspb.Charts, error) {
	charts, err := h.client.SearchCharts(filter.Term, filter.Regex)
	if err != nil {
		return nil, err
	}
	if len(charts) == 0 {
		return nil, status.Error(codes.NotFound, "zero charts found")
	}
	return h.toTempalates(charts), nil
}