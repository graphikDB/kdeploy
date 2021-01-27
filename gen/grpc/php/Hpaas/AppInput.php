<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Hpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AppInput is used to create/update an app
 *
 * Generated from protobuf message <code>hpaas.AppInput</code>
 */
class AppInput extends \Google\Protobuf\Internal\Message
{
    /**
     * the namespace the app/release belongs to(autocreated)
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validator.field) = {</code>
     */
    private $namespace = '';
    /**
     * the helm chart to use
     *
     * Generated from protobuf field <code>string chart = 2 [(.validator.field) = {</code>
     */
    private $chart = '';
    /**
     * name of the app/release
     *
     * Generated from protobuf field <code>string app_name = 3 [(.validator.field) = {</code>
     */
    private $app_name = '';
    /**
     * config values used to render the helm chart
     *
     * Generated from protobuf field <code>map<string, string> config = 4 [(.validator.field) = {</code>
     */
    private $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           the namespace the app/release belongs to(autocreated)
     *     @type string $chart
     *           the helm chart to use
     *     @type string $app_name
     *           name of the app/release
     *     @type array|\Google\Protobuf\Internal\MapField $config
     *           config values used to render the helm chart
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * the namespace the app/release belongs to(autocreated)
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validator.field) = {</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * the namespace the app/release belongs to(autocreated)
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * the helm chart to use
     *
     * Generated from protobuf field <code>string chart = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * the helm chart to use
     *
     * Generated from protobuf field <code>string chart = 2 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setChart($var)
    {
        GPBUtil::checkString($var, True);
        $this->chart = $var;

        return $this;
    }

    /**
     * name of the app/release
     *
     * Generated from protobuf field <code>string app_name = 3 [(.validator.field) = {</code>
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * name of the app/release
     *
     * Generated from protobuf field <code>string app_name = 3 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAppName($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_name = $var;

        return $this;
    }

    /**
     * config values used to render the helm chart
     *
     * Generated from protobuf field <code>map<string, string> config = 4 [(.validator.field) = {</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * config values used to render the helm chart
     *
     * Generated from protobuf field <code>map<string, string> config = 4 [(.validator.field) = {</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setConfig($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->config = $arr;

        return $this;
    }

}

