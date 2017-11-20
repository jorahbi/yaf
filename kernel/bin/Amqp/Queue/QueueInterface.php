<?php

namespace Amqp\Queue;

interface QueueInterface
{
	function start();

	function stop();
}