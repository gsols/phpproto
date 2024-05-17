<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GSols\PHPProto\Queuer\Messages\v1;

/**
 */
class MessageServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Messages\v1\GetMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMessages(\GSols\PHPProto\Queuer\Messages\v1\GetMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.messages.v1.MessageService/GetMessages',
        $argument,
        ['\GSols\PHPProto\Queuer\Messages\v1\GetMessagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GSols\PHPProto\Queuer\Messages\v1\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Acknowledge(\GSols\PHPProto\Queuer\Messages\v1\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queuer.messages.v1.MessageService/Acknowledge',
        $argument,
        ['\GSols\PHPProto\Queuer\Messages\v1\AcknowledgeResponse', 'decode'],
        $metadata, $options);
    }

}
