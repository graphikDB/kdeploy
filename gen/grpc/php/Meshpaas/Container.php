<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Meshpaas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container is a single docker container
 *
 * Generated from protobuf message <code>meshpaas.Container</code>
 */
class Container extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the application
     *
     * Generated from protobuf field <code>string name = 1 [(.validator.field) = {</code>
     */
    private $name = '';
    /**
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 2 [(.validator.field) = {</code>
     */
    private $image = '';
    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 4;</code>
     */
    private $env;
    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 5 [(.validator.field) = {</code>
     */
    private $ports;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name of the application
     *     @type string $image
     *           docker image of application
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $args
     *           args are arguments given to the docker image at startup
     *     @type array|\Google\Protobuf\Internal\MapField $env
     *           k/v map of environmental variables
     *     @type array|\Google\Protobuf\Internal\MapField $ports
     *           k/v map of ports to expose ex: http: 80 https: 443
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
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 2 [(.validator.field) = {</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * docker image of application
     *
     * Generated from protobuf field <code>string image = 2 [(.validator.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * args are arguments given to the docker image at startup
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * k/v map of environmental variables
     *
     * Generated from protobuf field <code>map<string, string> env = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

        return $this;
    }

    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 5 [(.validator.field) = {</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * k/v map of ports to expose ex: http: 80 https: 443
     *
     * Generated from protobuf field <code>map<string, uint32> ports = 5 [(.validator.field) = {</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPorts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ports = $arr;

        return $this;
    }

}

