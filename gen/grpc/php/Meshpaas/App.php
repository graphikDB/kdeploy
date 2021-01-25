<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Meshpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App is an App created from an AppTemplate
 *
 * Generated from protobuf message <code>meshpaas.App</code>
 */
class App extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     */
    private $name = '';
    /**
     * project name the app belongs to(autocreated)
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     */
    private $project = '';
    /**
     * version of the App. Iterates with each upgrade
     *
     * Generated from protobuf field <code>uint32 version = 3;</code>
     */
    private $version = 0;
    /**
     * config values
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 4;</code>
     */
    private $config = null;
    /**
     * Generated from protobuf field <code>.meshpaas.LifeCycle life_cycle = 5;</code>
     */
    private $life_cycle = null;
    /**
     * Generated from protobuf field <code>.meshpaas.AppTemplate template = 20;</code>
     */
    private $template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name of the application
     *     @type string $project
     *           project name the app belongs to(autocreated)
     *     @type int $version
     *           version of the App. Iterates with each upgrade
     *     @type \Google\Protobuf\Struct $config
     *           config values
     *     @type \Meshpaas\LifeCycle $life_cycle
     *     @type \Meshpaas\AppTemplate $template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * project name the app belongs to(autocreated)
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * project name the app belongs to(autocreated)
     *
     * Generated from protobuf field <code>string project = 2 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * version of the App. Iterates with each upgrade
     *
     * Generated from protobuf field <code>uint32 version = 3;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * version of the App. Iterates with each upgrade
     *
     * Generated from protobuf field <code>uint32 version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * config values
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 4;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * config values
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshpaas.LifeCycle life_cycle = 5;</code>
     * @return \Meshpaas\LifeCycle
     */
    public function getLifeCycle()
    {
        return $this->life_cycle;
    }

    /**
     * Generated from protobuf field <code>.meshpaas.LifeCycle life_cycle = 5;</code>
     * @param \Meshpaas\LifeCycle $var
     * @return $this
     */
    public function setLifeCycle($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\LifeCycle::class);
        $this->life_cycle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshpaas.AppTemplate template = 20;</code>
     * @return \Meshpaas\AppTemplate
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>.meshpaas.AppTemplate template = 20;</code>
     * @param \Meshpaas\AppTemplate $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Meshpaas\AppTemplate::class);
        $this->template = $var;

        return $this;
    }

}

