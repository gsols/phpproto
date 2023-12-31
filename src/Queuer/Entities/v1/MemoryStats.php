<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/entities/v1/stats.proto

namespace GSols\PHPProto\Queuer\Entities\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>queuer.entities.v1.MemoryStats</code>
 */
class MemoryStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 total = 1 [json_name = "total"];</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>uint64 used = 2 [json_name = "used"];</code>
     */
    protected $used = 0;
    /**
     * Generated from protobuf field <code>uint64 available = 3 [json_name = "available"];</code>
     */
    protected $available = 0;
    /**
     * Generated from protobuf field <code>uint64 free = 4 [json_name = "free"];</code>
     */
    protected $free = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total
     *     @type int|string $used
     *     @type int|string $available
     *     @type int|string $free
     * }
     */
    public function __construct($data = NULL) {
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Stats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 total = 1 [json_name = "total"];</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>uint64 total = 1 [json_name = "total"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint64($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 used = 2 [json_name = "used"];</code>
     * @return int|string
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Generated from protobuf field <code>uint64 used = 2 [json_name = "used"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setUsed($var)
    {
        GPBUtil::checkUint64($var);
        $this->used = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 available = 3 [json_name = "available"];</code>
     * @return int|string
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Generated from protobuf field <code>uint64 available = 3 [json_name = "available"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAvailable($var)
    {
        GPBUtil::checkUint64($var);
        $this->available = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 free = 4 [json_name = "free"];</code>
     * @return int|string
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Generated from protobuf field <code>uint64 free = 4 [json_name = "free"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFree($var)
    {
        GPBUtil::checkUint64($var);
        $this->free = $var;

        return $this;
    }

}

