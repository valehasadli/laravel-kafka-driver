<?php

namespace ValehAsadli\Kafka;

use Illuminate\Contracts\Queue\ClearableQueue;
use Illuminate\Queue\Queue;
use Illuminate\Contracts\Queue\Queue as QueueContract;

class KafkaQueue extends Queue implements QueueContract, ClearableQueue
{
    /**
     * The name of the default queue.
     *
     * @var string
     */
    protected string $default;

    /**
     * The queue URL prefix.
     *
     * @var string
     */
    protected string $prefix;

    /**
     * The queue name suffix.
     *
     * @var string
     */
    private string $suffix;

    public function size($queue = null)
    {
    }

    public function push($job, $data = '', $queue = null)
    {

    }

    public function pushRaw($payload, $queue = null, array $options = [])
    {
    }

    public function later($delay, $job, $data = '', $queue = null)
    {
    }

    public function pop($queue = null)
    {
    }

    public function clear($queue)
    {
    }
}