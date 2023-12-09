<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/entities/v1/consumer.proto

namespace GSols\PHPProto\Queuer\Entities\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.entities.v1.ProcessInfo</code>
 */
class ProcessInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string pid = 1 [json_name = "pid", (.validate.rules) = {</code>
     */
    protected $pid = '';
    /**
     * Generated from protobuf field <code>string uid = 2 [json_name = "uid", (.validate.rules) = {</code>
     */
    protected $uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pid
     *     @type string $uid
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Consumer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string pid = 1 [json_name = "pid", (.validate.rules) = {</code>
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>string pid = 1 [json_name = "pid", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string uid = 2 [json_name = "uid", (.validate.rules) = {</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>string uid = 2 [json_name = "uid", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

}
