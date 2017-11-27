<?php

namespace Kernel\Swoole\Service;

use Doctrine\Common\Collections\ArrayCollection ;
use Kernel\Yaf\Service\EntityManager;

/**
 * 数据库连接池
 */
class EntityManagerPool
{
	
	protected static $shareMap;
	protected static $defaultShareName;
	protected static $entityManager;

	public function __construct(EntityManager $entityManager, $workNum)
	{
		self::$entityManager = $entityManager->getShareMap();
		self::$shareMap = new ArrayCollection();
		self::$defaultShareName = $entityManager->getDefaultShareName();
		$splQueue = new \SplQueue();
		foreach (self::$entityManager as $key => $share) 
		{
			$shareWorkQueue = clone $splQueue;
			//$shareWorkQueue->setIteratorMode(\SplQueue::IT_MODE_DELETE);
			for ($i = 0; $i  < $workNum; $i++) 
			{ 
				$clone = clone $share;
				$clone->card = $share->shareName . '<=>' . $i;
				$shareWorkQueue->push($clone);
			}
			self::$shareMap->set($key, $shareWorkQueue );
		}
	}

	public function getConnect($shareId = null)
	{
		$shareId  = $shareId ?: self::$defaultShareName;
		if(!self::$shareMap->containsKey($shareId))
		{
			throw new \Exception('database not share', 1);
		}
		$shareWorkQueue = self::$shareMap->get($shareId );
		$isWait = false;
		while (true)
		 {

			if(!$shareWorkQueue->isEmpty())
			{
				$connect = $shareWorkQueue->pop();
				return $connect;
			}
		}
	}

	public function unlock(EntityManager $currentShare)
	{
		self::$shareMap->get($currentShare->shareName)->push($currentShare);
	}
}       
