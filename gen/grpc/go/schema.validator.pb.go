// Code generated by protoc-gen-gogo. DO NOT EDIT.
// source: schema.proto

package meshpaaspb

import (
	fmt "fmt"
	math "math"
	proto "github.com/golang/protobuf/proto"
	_ "github.com/golang/protobuf/ptypes/struct"
	_ "github.com/golang/protobuf/ptypes/timestamp"
	_ "github.com/golang/protobuf/ptypes/any"
	_ "github.com/golang/protobuf/ptypes/empty"
	_ "github.com/mwitkow/go-proto-validators"
	regexp "regexp"
	github_com_mwitkow_go_proto_validators "github.com/mwitkow/go-proto-validators"
)

// Reference imports to suppress errors if they are not otherwise used.
var _ = proto.Marshal
var _ = fmt.Errorf
var _ = math.Inf

var _regex_Dependency_TemplateName = regexp.MustCompile(`^.{1,225}$`)
var _regex_Dependency_Version = regexp.MustCompile(`^.{1,225}$`)
var _regex_Dependency_Repository = regexp.MustCompile(`^.{1,225}$`)

func (this *Dependency) Validate() error {
	if !_regex_Dependency_TemplateName.MatchString(this.TemplateName) {
		return github_com_mwitkow_go_proto_validators.FieldError("TemplateName", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.TemplateName))
	}
	if !_regex_Dependency_Version.MatchString(this.Version) {
		return github_com_mwitkow_go_proto_validators.FieldError("Version", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Version))
	}
	if !_regex_Dependency_Repository.MatchString(this.Repository) {
		return github_com_mwitkow_go_proto_validators.FieldError("Repository", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Repository))
	}
	return nil
}

var _regex_Maintainer_Name = regexp.MustCompile(`^.{1,225}$`)
var _regex_Maintainer_Email = regexp.MustCompile(`^.{1,225}$`)

func (this *Maintainer) Validate() error {
	if !_regex_Maintainer_Name.MatchString(this.Name) {
		return github_com_mwitkow_go_proto_validators.FieldError("Name", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Name))
	}
	if !_regex_Maintainer_Email.MatchString(this.Email) {
		return github_com_mwitkow_go_proto_validators.FieldError("Email", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Email))
	}
	return nil
}

var _regex_Filter_Term = regexp.MustCompile(`^.{1,225}$`)

func (this *Filter) Validate() error {
	if !_regex_Filter_Term.MatchString(this.Term) {
		return github_com_mwitkow_go_proto_validators.FieldError("Term", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Term))
	}
	return nil
}

var _regex_AppTemplate_Name = regexp.MustCompile(`^.{1,225}$`)

func (this *AppTemplate) Validate() error {
	if !_regex_AppTemplate_Name.MatchString(this.Name) {
		return github_com_mwitkow_go_proto_validators.FieldError("Name", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Name))
	}
	for _, item := range this.Dependencies {
		if item != nil {
			if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(item); err != nil {
				return github_com_mwitkow_go_proto_validators.FieldError("Dependencies", err)
			}
		}
	}
	for _, item := range this.Maintainer {
		if item != nil {
			if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(item); err != nil {
				return github_com_mwitkow_go_proto_validators.FieldError("Maintainer", err)
			}
		}
	}
	// Validation of proto3 map<> fields is unsupported.
	return nil
}
func (this *AppTemplates) Validate() error {
	for _, item := range this.Templates {
		if item != nil {
			if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(item); err != nil {
				return github_com_mwitkow_go_proto_validators.FieldError("Templates", err)
			}
		}
	}
	return nil
}

var _regex_App_Name = regexp.MustCompile(`^.{1,225}$`)
var _regex_App_Project = regexp.MustCompile(`^.{1,225}$`)

func (this *App) Validate() error {
	if !_regex_App_Name.MatchString(this.Name) {
		return github_com_mwitkow_go_proto_validators.FieldError("Name", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Name))
	}
	if !_regex_App_Project.MatchString(this.Project) {
		return github_com_mwitkow_go_proto_validators.FieldError("Project", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Project))
	}
	if this.Config != nil {
		if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(this.Config); err != nil {
			return github_com_mwitkow_go_proto_validators.FieldError("Config", err)
		}
	}
	if this.LifeCycle != nil {
		if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(this.LifeCycle); err != nil {
			return github_com_mwitkow_go_proto_validators.FieldError("LifeCycle", err)
		}
	}
	if this.Template != nil {
		if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(this.Template); err != nil {
			return github_com_mwitkow_go_proto_validators.FieldError("Template", err)
		}
	}
	return nil
}
func (this *Apps) Validate() error {
	for _, item := range this.Apps {
		if item != nil {
			if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(item); err != nil {
				return github_com_mwitkow_go_proto_validators.FieldError("Apps", err)
			}
		}
	}
	return nil
}
func (this *LifeCycle) Validate() error {
	// Validation of proto3 map<> fields is unsupported.
	return nil
}

var _regex_AppRef_Project = regexp.MustCompile(`^.{1,225}$`)
var _regex_AppRef_Name = regexp.MustCompile(`^.{1,225}$`)

func (this *AppRef) Validate() error {
	if !_regex_AppRef_Project.MatchString(this.Project) {
		return github_com_mwitkow_go_proto_validators.FieldError("Project", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Project))
	}
	if !_regex_AppRef_Name.MatchString(this.Name) {
		return github_com_mwitkow_go_proto_validators.FieldError("Name", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Name))
	}
	return nil
}

var _regex_AppInput_Project = regexp.MustCompile(`^.{1,225}$`)
var _regex_AppInput_TemplateName = regexp.MustCompile(`^.{1,225}$`)
var _regex_AppInput_AppName = regexp.MustCompile(`^.{1,225}$`)

func (this *AppInput) Validate() error {
	if !_regex_AppInput_Project.MatchString(this.Project) {
		return github_com_mwitkow_go_proto_validators.FieldError("Project", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.Project))
	}
	if !_regex_AppInput_TemplateName.MatchString(this.TemplateName) {
		return github_com_mwitkow_go_proto_validators.FieldError("TemplateName", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.TemplateName))
	}
	if !_regex_AppInput_AppName.MatchString(this.AppName) {
		return github_com_mwitkow_go_proto_validators.FieldError("AppName", fmt.Errorf(`value '%v' must be a string conforming to regex "^.{1,225}$"`, this.AppName))
	}
	// Validation of proto3 map<> fields is unsupported.
	return nil
}
func (this *ProjectRef) Validate() error {
	return nil
}
func (this *ProjectRefs) Validate() error {
	for _, item := range this.Projects {
		if item != nil {
			if err := github_com_mwitkow_go_proto_validators.CallValidatorIfExists(item); err != nil {
				return github_com_mwitkow_go_proto_validators.FieldError("Projects", err)
			}
		}
	}
	return nil
}
