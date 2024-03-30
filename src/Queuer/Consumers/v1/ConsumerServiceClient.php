<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Consumers\v1;

/**
 */
class ConsumerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterConsumer(\GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/RegisterConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\GetConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConsumer(\GSols\PHPProto\Queuer\Consumers\v1\GetConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/GetConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\GetConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\GetAuthorizedConsumersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAuthorizedConsumers(\GSols\PHPProto\Queuer\Consumers\v1\GetAuthorizedConsumersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/GetAuthorizedConsumers',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\GetAuthorizedConsumersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\GetUnauthorizedConsumersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUnauthorizedConsumers(\GSols\PHPProto\Queuer\Consumers\v1\GetUnauthorizedConsumersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/GetUnauthorizedConsumers',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\GetUnauthorizedConsumersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\AuthorizeConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AuthorizeConsumer(\GSols\PHPProto\Queuer\Consumers\v1\AuthorizeConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/AuthorizeConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\AuthorizeConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\DeauthorizeConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeauthorizeConsumer(\GSols\PHPProto\Queuer\Consumers\v1\DeauthorizeConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/DeauthorizeConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\DeauthorizeConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\RetrieveConsumerCredentialsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RetrieveConsumerCredentials(\GSols\PHPProto\Queuer\Consumers\v1\RetrieveConsumerCredentialsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/RetrieveConsumerCredentials',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\RetrieveConsumerCredentialsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function PublishConsumerStats($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/queuer.consumers.v1.ConsumerService/PublishConsumerStats',
        ['\GSols\PHPProto\Queuer\Consumers\v1\PublishConsumerStatsResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\GetConsumerStreamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConsumerStreams(\GSols\PHPProto\Queuer\Consumers\v1\GetConsumerStreamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/GetConsumerStreams',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\GetConsumerStreamsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\GetSubscribedStreamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSubscribedStreams(\GSols\PHPProto\Queuer\Consumers\v1\GetSubscribedStreamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/GetSubscribedStreams',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\GetSubscribedStreamsResponse', 'decode'],
        $metadata, $options);
    }

}
