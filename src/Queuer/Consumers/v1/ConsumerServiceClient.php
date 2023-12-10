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
     * @param \GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterConsumerInfo(\GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.ConsumerService/RegisterConsumerInfo',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\RegisterConsumerInfoResponse', 'decode'],
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
