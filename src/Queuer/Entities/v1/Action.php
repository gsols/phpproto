<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/entities/v1/command.proto

namespace GSols\PHPProto\Queuer\Entities\v1;

use UnexpectedValueException;

/**
 * Protobuf type <code>queuer.entities.v1.Action</code>
 */
class Action
{
    /**
     * Generated from protobuf enum <code>ACTION_UNSPECIFIED = 0;</code>
     */
    const ACTION_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_RELOAD = 1;</code>
     */
    const ACTION_REQUEST_RELOAD = 1;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_RESTART = 2;</code>
     */
    const ACTION_REQUEST_RESTART = 2;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_REBOOT = 3;</code>
     */
    const ACTION_REQUEST_REBOOT = 3;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_NETWORK_SPEED = 4;</code>
     */
    const ACTION_REQUEST_NETWORK_SPEED = 4;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_UPDATE_SERVICE = 5;</code>
     */
    const ACTION_REQUEST_UPDATE_SERVICE = 5;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_LOGS = 6;</code>
     */
    const ACTION_REQUEST_LOGS = 6;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_TEST = 7;</code>
     */
    const ACTION_REQUEST_TEST = 7;
    /**
     * Generated from protobuf enum <code>ACTION_REQUEST_STATUS = 8;</code>
     */
    const ACTION_REQUEST_STATUS = 8;

    private static $valueToName = [
        self::ACTION_UNSPECIFIED => 'ACTION_UNSPECIFIED',
        self::ACTION_REQUEST_RELOAD => 'ACTION_REQUEST_RELOAD',
        self::ACTION_REQUEST_RESTART => 'ACTION_REQUEST_RESTART',
        self::ACTION_REQUEST_REBOOT => 'ACTION_REQUEST_REBOOT',
        self::ACTION_REQUEST_NETWORK_SPEED => 'ACTION_REQUEST_NETWORK_SPEED',
        self::ACTION_REQUEST_UPDATE_SERVICE => 'ACTION_REQUEST_UPDATE_SERVICE',
        self::ACTION_REQUEST_LOGS => 'ACTION_REQUEST_LOGS',
        self::ACTION_REQUEST_TEST => 'ACTION_REQUEST_TEST',
        self::ACTION_REQUEST_STATUS => 'ACTION_REQUEST_STATUS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

