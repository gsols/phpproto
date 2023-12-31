<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/entities/v1/message.proto

namespace GSols\PHPProto\Queuer\Entities\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.entities.v1.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>bytes payload = 2 [json_name = "payload"];</code>
     */
    protected $payload = '';
    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Priority priority = 3 [json_name = "priority"];</code>
     */
    protected $priority = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $payload
     *     @type int $priority
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2 [json_name = "payload"];</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2 [json_name = "payload"];</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Priority priority = 3 [json_name = "priority"];</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Priority priority = 3 [json_name = "priority"];</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkEnum($var, \GSols\PHPProto\Queuer\Entities\v1\Priority::class);
        $this->priority = $var;

        return $this;
    }

}

