<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kdeploy.proto

namespace Kdeploy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kdeploy.ServerTLSSettings</code>
 */
class ServerTLSSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool https_redirect = 1;</code>
     */
    private $https_redirect = false;
    /**
     * Generated from protobuf field <code>.kdeploy.TLSmode mode = 2;</code>
     */
    private $mode = 0;
    /**
     * Generated from protobuf field <code>string server_certificate = 3;</code>
     */
    private $server_certificate = '';
    /**
     * Generated from protobuf field <code>string private_key = 4;</code>
     */
    private $private_key = '';
    /**
     * Generated from protobuf field <code>string ca_certificates = 5;</code>
     */
    private $ca_certificates = '';
    /**
     * Generated from protobuf field <code>string credential_name = 10;</code>
     */
    private $credential_name = '';
    /**
     * Generated from protobuf field <code>repeated string subject_alt_names = 6;</code>
     */
    private $subject_alt_names;
    /**
     * Generated from protobuf field <code>repeated string verify_certificate_spki = 11;</code>
     */
    private $verify_certificate_spki;
    /**
     * Generated from protobuf field <code>repeated string verify_certificate_hash = 12;</code>
     */
    private $verify_certificate_hash;
    /**
     * Generated from protobuf field <code>repeated string cipher_suites = 9;</code>
     */
    private $cipher_suites;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $https_redirect
     *     @type int $mode
     *     @type string $server_certificate
     *     @type string $private_key
     *     @type string $ca_certificates
     *     @type string $credential_name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $subject_alt_names
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $verify_certificate_spki
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $verify_certificate_hash
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $cipher_suites
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kdeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool https_redirect = 1;</code>
     * @return bool
     */
    public function getHttpsRedirect()
    {
        return $this->https_redirect;
    }

    /**
     * Generated from protobuf field <code>bool https_redirect = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setHttpsRedirect($var)
    {
        GPBUtil::checkBool($var);
        $this->https_redirect = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.kdeploy.TLSmode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>.kdeploy.TLSmode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Kdeploy\TLSmode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string server_certificate = 3;</code>
     * @return string
     */
    public function getServerCertificate()
    {
        return $this->server_certificate;
    }

    /**
     * Generated from protobuf field <code>string server_certificate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServerCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_certificate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string private_key = 4;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Generated from protobuf field <code>string private_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ca_certificates = 5;</code>
     * @return string
     */
    public function getCaCertificates()
    {
        return $this->ca_certificates;
    }

    /**
     * Generated from protobuf field <code>string ca_certificates = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCertificates($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_certificates = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string credential_name = 10;</code>
     * @return string
     */
    public function getCredentialName()
    {
        return $this->credential_name;
    }

    /**
     * Generated from protobuf field <code>string credential_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialName($var)
    {
        GPBUtil::checkString($var, True);
        $this->credential_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string subject_alt_names = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubjectAltNames()
    {
        return $this->subject_alt_names;
    }

    /**
     * Generated from protobuf field <code>repeated string subject_alt_names = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubjectAltNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subject_alt_names = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string verify_certificate_spki = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVerifyCertificateSpki()
    {
        return $this->verify_certificate_spki;
    }

    /**
     * Generated from protobuf field <code>repeated string verify_certificate_spki = 11;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVerifyCertificateSpki($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->verify_certificate_spki = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string verify_certificate_hash = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVerifyCertificateHash()
    {
        return $this->verify_certificate_hash;
    }

    /**
     * Generated from protobuf field <code>repeated string verify_certificate_hash = 12;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVerifyCertificateHash($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->verify_certificate_hash = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string cipher_suites = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCipherSuites()
    {
        return $this->cipher_suites;
    }

    /**
     * Generated from protobuf field <code>repeated string cipher_suites = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCipherSuites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cipher_suites = $arr;

        return $this;
    }

}

