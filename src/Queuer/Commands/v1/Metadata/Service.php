<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: queuer/commands/v1/service.proto

namespace GSols\PHPProto\Queuer\Commands\v1\Metadata;

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
        \GSols\PHPProto\Queuer\Commands\v1\Metadata\Messages::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 queuer/commands/v1/service.protoqueuer.commands.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto!queuer/entities/v1/consumer.protoqueuer/entities/v1/stream.proto queuer/entities/v1/message.proto queuer/entities/v1/command.protoqueuer/entities/v1/stats.proto!queuer/commands/v1/messages.proto2�
CommandsService�
SubscribeToCommands..queuer.commands.v1.SubscribeToCommandsRequest/.queuer.commands.v1.SubscribeToCommandsResponse"���/v1/commands0|

AckCommand%.queuer.commands.v1.AckCommandRequest&.queuer.commands.v1.AckCommandResponse"���:*"/v1/{command_id}:ackB�Z.github.com/gsols/goproto/queuer/commands/v1;v1�!GSols\\PHPProto\\Queuer\\Commands\\v1�*GSols\\PHPProto\\Queuer\\Commands\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
