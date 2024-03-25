<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Commands\v1;

/**
 */
class CommandServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\SubscribeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Subscribe(\GSols\PHPProto\Queuer\Commands\v1\SubscribeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/queuer.commands.v1.CommandService/Subscribe',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\SubscribeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Create(\GSols\PHPProto\Queuer\Commands\v1\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.commands.v1.CommandService/Create',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\CreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\GSols\PHPProto\Queuer\Commands\v1\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.commands.v1.CommandService/Get',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\GetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Commands\v1\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Acknowledge(\GSols\PHPProto\Queuer\Commands\v1\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.commands.v1.CommandService/Acknowledge',
        $argument,
        ['\GSols\PHPProto\Queuer\Commands\v1\AcknowledgeResponse', 'decode'],
        $metadata, $options);
    }

}
