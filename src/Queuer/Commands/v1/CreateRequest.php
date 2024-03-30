<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/commands/v1/messages.proto

namespace GSols\PHPProto\Queuer\Commands\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.commands.v1.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string consumer_id = 1 [json_name = "consumerId", (.validate.rules) = {</code>
     */
    protected $consumer_id = '';
    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Action action = 2 [json_name = "action"];</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>optional bytes payload = 3 [json_name = "payload"];</code>
     */
    protected $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $consumer_id
     *     @type int $action
     *     @type string $payload
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Commands\v1\Metadata\Messages::initOnce();
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

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Action action = 2 [json_name = "action"];</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Action action = 2 [json_name = "action"];</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \GSols\PHPProto\Queuer\Entities\v1\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes payload = 3 [json_name = "payload"];</code>
     * @return string
     */
    public function getPayload()
    {
        return isset($this->payload) ? $this->payload : '';
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Generated from protobuf field <code>optional bytes payload = 3 [json_name = "payload"];</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}

