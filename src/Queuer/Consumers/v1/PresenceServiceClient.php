<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Consumers\v1;

/**
 */
class PresenceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Consumers\v1\IAmAliveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IAmAlive(\GSols\PHPProto\Queuer\Consumers\v1\IAmAliveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.consumers.v1.PresenceService/IAmAlive',
        $argument,
        ['\GSols\PHPProto\Queuer\Consumers\v1\IAmAliveResponse', 'decode'],
        $metadata, $options);
    }

}
