<?php

namespace Amqp\Queue;

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * 消息订阅发布
 * @link http://blog.csdn.net/demon3182/article/details/77482771
 */
class Subscribe implements QueueInterface
{
	public function start()
	{
		$connection = new AMQPStreamConnection('127.0.0.1', 5672, 'test', 'test');
		$channel = $connection->channel();

		$channel->exchange_declare('logs', 'fanout', false, false, false);
		list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

		$channel->queue_bind($queue_name, 'logs');
		echo ' [*] Waiting for logs. To exit press CTRL+C', "\n";

		$callback = function($msg){
		  echo ' [x] ', $msg->body, "\n";
		};
		$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

		while(count($channel->callbacks)) {
		    $channel->wait();
		}
		$channel->close();
		$connection->close();
	}

	public function stop()
	{

	}
}