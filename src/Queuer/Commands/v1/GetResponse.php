<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/commands/v1/messages.proto

namespace GSols\PHPProto\Queuer\Commands\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.commands.v1.GetResponse</code>
 */
class GetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Command command = 1 [json_name = "command"];</code>
     */
    protected $command = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GSols\PHPProto\Queuer\Entities\v1\Command $command
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Commands\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Command command = 1 [json_name = "command"];</code>
     * @return \GSols\PHPProto\Queuer\Entities\v1\Command|null
     */
    public function getCommand()
    {
        return $this->command;
    }

    public function hasCommand()
    {
        return isset($this->command);
    }

    public function clearCommand()
    {
        unset($this->command);
    }

    /**
     * Generated from protobuf field <code>.queuer.entities.v1.Command command = 1 [json_name = "command"];</code>
     * @param \GSols\PHPProto\Queuer\Entities\v1\Command $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkMessage($var, \GSols\PHPProto\Queuer\Entities\v1\Command::class);
        $this->command = $var;

        return $this;
    }

}

