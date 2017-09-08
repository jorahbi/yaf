<?php

namespace Amqp\Queue;

use PhpAmqpLib\Connection\AMQPStreamConnection;

class TestQueue implements QueueInterface
{
	public function start()
	{
		$connection = new AMQPStreamConnection('127.0.0.1', 5672, 'test', 'test');
		$channel = $connection->channel();
		
		//args3 将队列声明为持久化
		$channel->queue_declare('queue2', false, true, false, false);
		echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
		
		//args2 设置为1 不要给消息者一次发送多个消息，消息确认之后再发送。
		$channel->basic_qos(null, 1, null);

		//args2 direct, topic, headers, fanout (exchange交换机类型)
		$channel->exchange_declare('logs', 'fanout', false, false, false);

		/*//生成随机队列
		list($queue_name, ,) = $channel->queue_declare("");
		//绑定
		$channel->queue_bind($queue_name, 'logs');*/

		//args4 true 表示不开启消息确认 false开启
		$channel->basic_consume('queue2', '', false, false, false, false, function($msg){
			echo " [x] Received ", $msg->body, "\n";
			//消息确认
			$msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
		});

		while(count($channel->callbacks)) 
		{
		    $channel->wait();
		}

		$channel->close();
		$connection->close();
	}

	public function stop()
	{

	}
}