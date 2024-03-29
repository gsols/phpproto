<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/consumers/v1/messages.proto

namespace GSols\PHPProto\Queuer\Consumers\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.consumers.v1.RetrieveConsumerCredentialsResponse</code>
 */
class RetrieveConsumerCredentialsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes credentials = 1 [json_name = "credentials"];</code>
     */
    protected $credentials = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $credentials
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Consumers\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes credentials = 1 [json_name = "credentials"];</code>
     * @return string
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Generated from protobuf field <code>bytes credentials = 1 [json_name = "credentials"];</code>
     * @param string $var
     * @return $this
     */
    public function setCredentials($var)
    {
        GPBUtil::checkString($var, False);
        $this->credentials = $var;

        return $this;
    }

}

