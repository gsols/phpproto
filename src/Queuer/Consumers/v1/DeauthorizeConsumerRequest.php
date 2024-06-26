<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/consumers/v1/messages.proto

namespace GSols\PHPProto\Queuer\Consumers\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.consumers.v1.DeauthorizeConsumerRequest</code>
 */
class DeauthorizeConsumerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string consumer_id = 1 [json_name = "consumerId", (.validate.rules) = {</code>
     */
    protected $consumer_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $consumer_id
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Consumers\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string consumer_id = 1 [json_name = "consumerId", (.validate.rules) = {</code>
     * @return string
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * Generated from protobuf field <code>string consumer_id = 1 [json_name = "consumerId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;

        return $this;
    }

}

