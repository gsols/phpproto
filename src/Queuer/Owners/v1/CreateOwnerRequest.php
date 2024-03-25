<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/owners/v1/messages.proto

namespace GSols\PHPProto\Queuer\Owners\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.owners.v1.CreateOwnerRequest</code>
 */
class CreateOwnerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id", (.validate.rules) = {</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Owners\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

