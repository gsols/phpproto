<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/owners/v1/messages.proto

namespace GSols\PHPProto\Queuer\Owners\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.owners.v1.GetOwnerRequest</code>
 */
class GetOwnerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string owner_id = 1 [json_name = "ownerId", (.validate.rules) = {</code>
     */
    protected $owner_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $owner_id
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Owners\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string owner_id = 1 [json_name = "ownerId", (.validate.rules) = {</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 1 [json_name = "ownerId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_id = $var;

        return $this;
    }

}

