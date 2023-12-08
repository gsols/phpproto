<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Commands\v1;

/**
 */
class CommandsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\SubscribeToCommandsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeToCommands(\GSols\PHPProto\Queuer\Commands\v1\SubscribeToCommandsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/queuer.commands.v1.CommandsService/SubscribeToCommands',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\SubscribeToCommandsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\AckCommandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AckCommand(\GSols\PHPProto\Queuer\Commands\v1\AckCommandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.commands.v1.CommandsService/AckCommand',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\AckCommandResponse', 'decode'],
        $metadata, $options);
    }

}
