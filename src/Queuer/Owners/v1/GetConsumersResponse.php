<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/owners/v1/messages.proto

namespace GSols\PHPProto\Queuer\Owners\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.owners.v1.GetConsumersResponse</code>
 */
class GetConsumersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .queuer.entities.v1.Consumer consumers = 1 [json_name = "consumers"];</code>
     */
    private $consumers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GSols\PHPProto\Queuer\Entities\v1\Consumer>|\Google\Protobuf\Internal\RepeatedField $consumers
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Owners\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .queuer.entities.v1.Consumer consumers = 1 [json_name = "consumers"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumers()
    {
        return $this->consumers;
    }

    /**
     * Generated from protobuf field <code>repeated .queuer.entities.v1.Consumer consumers = 1 [json_name = "consumers"];</code>
     * @param array<\GSols\PHPProto\Queuer\Entities\v1\Consumer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GSols\PHPProto\Queuer\Entities\v1\Consumer::class);
        $this->consumers = $arr;

        return $this;
    }

}

