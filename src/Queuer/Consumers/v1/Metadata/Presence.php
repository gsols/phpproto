<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/consumers/v1/presence.proto

namespace GSols\PHPProto\Queuer\Consumers\v1\Metadata;

class Presence
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
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Consumer::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Stream::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Message::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Command::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Stats::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Result::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Session::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"queuer/consumers/v1/presence.protoqueuer.consumers.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto!queuer/entities/v1/consumer.protoqueuer/entities/v1/stream.proto queuer/entities/v1/message.proto queuer/entities/v1/command.protoqueuer/entities/v1/stats.protoqueuer/entities/v1/result.proto queuer/entities/v1/session.proto"K
IAmAliveRequest8
	timestamp (2.google.protobuf.TimestampR	timestamp"L
IAmAliveResponse8
	timestamp (2.google.protobuf.TimestampR	timestampB�Z/github.com/gsols/goproto/queuer/consumers/v1;v1�"GSols\\PHPProto\\Queuer\\Consumers\\v1�+GSols\\PHPProto\\Queuer\\Consumers\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
