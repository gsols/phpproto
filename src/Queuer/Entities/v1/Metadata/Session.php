<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/entities/v1/session.proto

namespace GSols\PHPProto\Queuer\Entities\v1\Metadata;

class Session
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 queuer/entities/v1/session.protoqueuer.entities.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto"=
Session
id (	B�Br�Rid
payload (RpayloadB�Z.github.com/gsols/goproto/queuer/entities/v1;v1�!GSols\\PHPProto\\Queuer\\Entities\\v1�*GSols\\PHPProto\\Queuer\\Entities\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
