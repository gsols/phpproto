<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: base/utils/v1/messages.proto

namespace GSols\PHPProto\Utils\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>base.utils.v1.GetVersionResponse</code>
 */
class GetVersionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Utils\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}
