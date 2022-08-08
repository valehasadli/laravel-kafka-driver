<?php

namespace ValehAsadli\Kafka\Connectors;

use Illuminate\Queue\Connectors\ConnectorInterface;
use ValehAsadli\Kafka\KafkaQueue;

class KafkaQueueConnector implements ConnectorInterface
{
    public function connect(array $config)
    {
        return new KafkaQueue();
    }
}