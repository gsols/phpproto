<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/consumers/v1/service.proto

namespace GSols\PHPProto\Queuer\Consumers\v1\Metadata;

class Service
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
        \GSols\PHPProto\Queuer\Consumers\v1\Metadata\Messages::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!queuer/consumers/v1/service.protoqueuer.consumers.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto!queuer/entities/v1/consumer.protoqueuer/entities/v1/stream.proto queuer/entities/v1/message.proto queuer/entities/v1/command.protoqueuer/entities/v1/stats.proto"queuer/consumers/v1/messages.proto2�
ConsumerService�
PublishConsumerStats0.queuer.consumers.v1.PublishConsumerStatsRequest1.queuer.consumers.v1.PublishConsumerStatsResponse",���&:*"!/v1/consumers/{consumer_id}/stats(�
GetSubscribedStreams0.queuer.consumers.v1.GetSubscribedStreamsRequest1.queuer.consumers.v1.GetSubscribedStreamsResponse"+���%#/v1/consumers/{consumer_id}/streamsB�Z/github.com/gsols/goproto/queuer/consumers/v1;v1�"GSols\\PHPProto\\Queuer\\Consumers\\v1�+GSols\\PHPProto\\Queuer\\Consumers\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
