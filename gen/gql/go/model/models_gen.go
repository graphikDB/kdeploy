// Code generated by github.com/99designs/gqlgen, DO NOT EDIT.

package model

type App struct {
	Name       string                 `json:"name"`
	Project    string                 `json:"project"`
	Containers []*Container           `json:"containers"`
	Replicas   int                    `json:"replicas"`
	Networking *Networking            `json:"networking"`
	Status     *AppStatus             `json:"status"`
	Labels     map[string]interface{} `json:"labels"`
	Selector   map[string]interface{} `json:"selector"`
}

type AppInput struct {
	Name       string                 `json:"name"`
	Project    string                 `json:"project"`
	Containers []*ContainerInput      `json:"containers"`
	Replicas   int                    `json:"replicas"`
	Networking *NetworkingInput       `json:"networking"`
	Labels     map[string]interface{} `json:"labels"`
	Selector   map[string]interface{} `json:"selector"`
}

type AppStatus struct {
	Replicas []*Replica `json:"replicas"`
}

type Container struct {
	Name  string                 `json:"name"`
	Image string                 `json:"image"`
	Args  []string               `json:"args"`
	Env   map[string]interface{} `json:"env"`
	Ports map[string]interface{} `json:"ports"`
}

type ContainerInput struct {
	Name  string                 `json:"name"`
	Image string                 `json:"image"`
	Args  []string               `json:"args"`
	Env   map[string]interface{} `json:"env"`
	Ports map[string]interface{} `json:"ports"`
}

type HTTPRoute struct {
	Name             string   `json:"name"`
	Port             int      `json:"port"`
	PathPrefix       *string  `json:"path_prefix"`
	RewriteURI       *string  `json:"rewrite_uri"`
	AllowOrigins     []string `json:"allow_origins"`
	AllowMethods     []string `json:"allow_methods"`
	AllowHeaders     []string `json:"allow_headers"`
	ExposeHeaders    []string `json:"expose_headers"`
	AllowCredentials *bool    `json:"allow_credentials"`
}

type HTTPRouteInput struct {
	Name             string   `json:"name"`
	Port             int      `json:"port"`
	PathPrefix       *string  `json:"path_prefix"`
	RewriteURI       *string  `json:"rewrite_uri"`
	AllowOrigins     []string `json:"allow_origins"`
	AllowMethods     []string `json:"allow_methods"`
	AllowHeaders     []string `json:"allow_headers"`
	ExposeHeaders    []string `json:"expose_headers"`
	AllowCredentials *bool    `json:"allow_credentials"`
}

type Log struct {
	Message string `json:"message"`
}

type Networking struct {
	Gateways   []string     `json:"gateways"`
	Hosts      []string     `json:"hosts"`
	Export     *bool        `json:"export"`
	HTTPRoutes []*HTTPRoute `json:"http_routes"`
}

type NetworkingInput struct {
	Gateways   []string          `json:"gateways"`
	Hosts      []string          `json:"hosts"`
	Export     *bool             `json:"export"`
	HTTPRoutes []*HTTPRouteInput `json:"http_routes"`
}

type Project struct {
	Name   string                 `json:"name"`
	Labels map[string]interface{} `json:"labels"`
}

type ProjectInput struct {
	Name   string                 `json:"name"`
	Labels map[string]interface{} `json:"labels"`
}

type ProjectRef struct {
	Name string `json:"name"`
}

type Projects struct {
	Projects []string `json:"projects"`
}

type Ref struct {
	Name    string `json:"name"`
	Project string `json:"project"`
}

type Replica struct {
	Phase     string `json:"phase"`
	Condition string `json:"condition"`
	Reason    string `json:"reason"`
}

type Task struct {
	Name        string                 `json:"name"`
	Project     string                 `json:"project"`
	Containers  []*Container           `json:"containers"`
	Schedule    string                 `json:"schedule"`
	Completions *int                   `json:"completions"`
	Labels      map[string]interface{} `json:"labels"`
	Selector    map[string]interface{} `json:"selector"`
}

type TaskInput struct {
	Name        string                 `json:"name"`
	Project     string                 `json:"project"`
	Containers  []*ContainerInput      `json:"containers"`
	Schedule    string                 `json:"schedule"`
	Completions *int                   `json:"completions"`
	Labels      map[string]interface{} `json:"labels"`
	Selector    map[string]interface{} `json:"selector"`
}
