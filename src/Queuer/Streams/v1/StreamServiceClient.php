<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Streams\v1;

/**
 */
class StreamServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\CreateStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateStream(\GSols\PHPProto\Queuer\Streams\v1\CreateStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/CreateStream',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\CreateStreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\GetStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStream(\GSols\PHPProto\Queuer\Streams\v1\GetStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/GetStream',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\GetStreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\DeleteStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteStream(\GSols\PHPProto\Queuer\Streams\v1\DeleteStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/DeleteStream',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\DeleteStreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\FlushStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FlushStream(\GSols\PHPProto\Queuer\Streams\v1\FlushStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/FlushStream',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\FlushStreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\PublishMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PublishMessage(\GSols\PHPProto\Queuer\Streams\v1\PublishMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/PublishMessage',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\PublishMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\SubscribeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Subscribe(\GSols\PHPProto\Queuer\Streams\v1\SubscribeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/queuer.streams.v1.StreamService/Subscribe',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\SubscribeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\UpdateStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateState(\GSols\PHPProto\Queuer\Streams\v1\UpdateStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/UpdateState',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\UpdateStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\GetConsumersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConsumers(\GSols\PHPProto\Queuer\Streams\v1\GetConsumersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/GetConsumers',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\GetConsumersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\RegisterConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterConsumer(\GSols\PHPProto\Queuer\Streams\v1\RegisterConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/RegisterConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\RegisterConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Streams\v1\UnregisterConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnregisterConsumer(\GSols\PHPProto\Queuer\Streams\v1\UnregisterConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.streams.v1.StreamService/UnregisterConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Streams\v1\UnregisterConsumerResponse', 'decode'],
        $metadata, $options);
    }

}
