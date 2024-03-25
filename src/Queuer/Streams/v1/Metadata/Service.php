<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/streams/v1/service.proto

namespace GSols\PHPProto\Queuer\Streams\v1\Metadata;

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
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Stream::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Message::initOnce();
        \GSols\PHPProto\Queuer\Entities\v1\Metadata\Stats::initOnce();
        \GSols\PHPProto\Queuer\Streams\v1\Metadata\Messages::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
queuer/streams/v1/service.protoqueuer.streams.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.protoqueuer/entities/v1/stream.proto queuer/entities/v1/message.protoqueuer/entities/v1/stats.proto queuer/streams/v1/messages.proto2�

StreamServicek
Register".queuer.streams.v1.RegisterRequest#.queuer.streams.v1.RegisterResponse"���:*"/v1/streamsw
	GetStream#.queuer.streams.v1.GetStreamRequest$.queuer.streams.v1.GetStreamResponse"���/v1/streams/{stream_id}�
DeleteStream&.queuer.streams.v1.DeleteStreamRequest\'.queuer.streams.v1.DeleteStreamResponse"���*/v1/streams/{stream_id}�
FlushStream%.queuer.streams.v1.FlushStreamRequest&.queuer.streams.v1.FlushStreamResponse"%���"/v1/streams/{stream_id}/flush�
PublishMessage(.queuer.streams.v1.PublishMessageRequest).queuer.streams.v1.PublishMessageResponse"*���$:*"/v1/streams/{stream_id}/publishy
	Subscribe#.queuer.streams.v1.SubscribeRequest$.queuer.streams.v1.SubscribeResponse"���:*"/v1/streams/messages0�
UpdateState%.queuer.streams.v1.UpdateStateRequest&.queuer.streams.v1.UpdateStateResponse"(���":*2/v1/streams/{stream_id}/state�
GetConsumers&.queuer.streams.v1.GetConsumersRequest\'.queuer.streams.v1.GetConsumersResponse")���#!/v1/streams/{stream_id}/consumers�
RegisterConsumer*.queuer.streams.v1.RegisterConsumerRequest+.queuer.streams.v1.RegisterConsumerResponse",���&:*"!/v1/streams/{stream_id}/consumers�
UnregisterConsumer,.queuer.streams.v1.UnregisterConsumerRequest-.queuer.streams.v1.UnregisterConsumerResponse"7���1*//v1/streams/{stream_id}/consumers/{consumer_id}B~Z-github.com/gsols/goproto/queuer/streams/v1;v1� GSols\\PHPProto\\Queuer\\Streams\\v1�)GSols\\PHPProto\\Queuer\\Streams\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

