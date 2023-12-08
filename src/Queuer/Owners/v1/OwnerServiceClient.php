<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Owners\v1;

/**
 */
class OwnerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Owners\v1\CreateOwnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOwner(\GSols\PHPProto\Queuer\Owners\v1\CreateOwnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.owners.v1.OwnerService/CreateOwner',
        $argument,
        ['\GSols\PHPProto\Queuer\Owners\v1\CreateOwnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Owners\v1\GetOwnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOwner(\GSols\PHPProto\Queuer\Owners\v1\GetOwnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.owners.v1.OwnerService/GetOwner',
        $argument,
        ['\GSols\PHPProto\Queuer\Owners\v1\GetOwnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Owners\v1\RegisterConsumerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterConsumer(\GSols\PHPProto\Queuer\Owners\v1\RegisterConsumerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.owners.v1.OwnerService/RegisterConsumer',
        $argument,
        ['\GSols\PHPProto\Queuer\Owners\v1\RegisterConsumerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Owners\v1\GetConsumersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConsumers(\GSols\PHPProto\Queuer\Owners\v1\GetConsumersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.owners.v1.OwnerService/GetConsumers',
        $argument,
        ['\GSols\PHPProto\Queuer\Owners\v1\GetConsumersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Owners\v1\ListStreamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListStreams(\GSols\PHPProto\Queuer\Owners\v1\ListStreamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.owners.v1.OwnerService/ListStreams',
        $argument,
        ['\GSols\PHPProto\Queuer\Owners\v1\ListStreamsResponse', 'decode'],
        $metadata, $options);
    }

}
