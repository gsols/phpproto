<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/streams/v1/messages.proto

namespace GSols\PHPProto\Queuer\Streams\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.streams.v1.FlushStreamResponse</code>
 */
class FlushStreamResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Result result = 1 [json_name = "result"];</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GSols\PHPProto\Queuer\Entities\v1\Result $result
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Streams\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Result result = 1 [json_name = "result"];</code>
     * @return \GSols\PHPProto\Queuer\Entities\v1\Result|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Result result = 1 [json_name = "result"];</code>
     * @param \GSols\PHPProto\Queuer\Entities\v1\Result $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \GSols\PHPProto\Queuer\Entities\v1\Result::class);
        $this->result = $var;

        return $this;
    }

}

