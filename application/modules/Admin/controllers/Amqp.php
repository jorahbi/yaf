<?php

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class AmqpController extends \Yaf\Controller
{
	/**
	 * Amqp send
	 */
	public function indexAction()
	{
		$connection = new AMQPStreamConnection('127.0.0.1', 5672, 'test', 'test');
		$channel = $connection->channel();

		

		//args3 将队列声明为持久化
		$channel->queue_declare('queue2', false, true, false, false);
		$msg = new AMQPMessage('发送消息!111', [
			//把消息标记为持久化 AMQPMessage::DELIVERY_MODE_PERSISTENT = 2
			'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT
		]);
		
		//args2 可以为空 交换机名
		$channel->basic_publish($msg, '', 'queue2');
		echo " [x] Sent 'Hello World!'\n";

		$channel->close();
		$connection->close();
		$this->json([]);
	}

	/**
	 * 发布订阅
	 */
	public function subscribeAction()
	{
		$connection = new AMQPStreamConnection('127.0.0.1', 5672, 'test', 'test');
		$channel = $connection->channel();
		//args2 direct, topic, headers, fanout (exchange交换机类型)
		//fanout 广播类型
		$channel->exchange_declare('logs', 'fanout', false, false, false);
		
		$data = "info: 发布订阅";
		$msg = new AMQPMessage($data);

		$channel->basic_publish($msg, 'logs');

		echo " [x] Sent ", $data, "\n";

		$channel->close();
		$connection->close();
		$this->json([]);
	}
}