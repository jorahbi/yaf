<?php

namespace Kernel\Swoole\Service;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * 数据库连接池
 */
class EntityManagerPool
{
	
	protected static $shareMap;
	protected static $defaultShare;

	public function __construct(\Kernel\Yaf\Service\EntityManager $EntityManager, $workNum)
	{
		self::$shareMap = $EntityManager->getShareMap();
		foreach (self::$shareMap as $key => $share) 
		{
			$shareWorkQueue = new \SplQueue();
			$shareWorkQueue->push($share);
			for ($i = 0; $i  < $workNum - 1; $i++) 
			{ 
				$shareWorkQueue->push(clone $share);
			}
			self::$shareMap->set($key, $shareWorkQueue );
		}
	}

	public function getConnect($shareId = null)
	{
		$shareId  = $shareId ?: self::$defaultShare;
		$shareWorkQueue = self::$workMap->get($shareId );
		$this->currentShare = new \ArrayCollection();
		while (true)
		 {
			if(!$shareWorkQueue->isEmpty())
			{
				$connect = $shareWorkQueue->pop();
				$this->currentShare->set($shareId, $connect);
				return $connect;
			}
		}
	}

	public function unlock(\Kernel\Yaf\Service\EntityManager $currentShare)
	{
		self::$workMap->get($currentShare->getShareName() )->push($currentShare);
	}
}       
