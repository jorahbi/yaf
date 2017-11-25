<?php

namespace Kernel\Yaf\Service;

use Doctrine\ORM\EntityManager as DoctrinetEntityManager;
use Doctrine\Common\Collections\ArrayCollection ;

/**
 * 数据库连接
 */
class EntityManager extends DoctrinetEntityManager
{
	protected static $defaultShare;
	protected static $shareMap;
	protected $shareName;

	public function __construct()
	{
		self::$shareMap = new ArrayCollection();
		$DBConfig = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/database.ini', APP_ENVIRON);
		$appConfig= new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini');
		$shares = explode(',', $DBConfig->database->share);
		self::$defaultShare = $shares[0];
		
		foreach ($shares as $shareName) 
		{
			$doctrineConfig = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration([$appConfig->common->application->orm->yml], true);
			$dsn = [
				'driver' => $DBConfig->$share->driver,
				'user' => $DBConfig->$share->user,
				'password' => $DBConfig->$share->pwd,
				'host' => $DBConfig->$share->host,
				'dbname' => $DBConfig->$share->dbname,
			];
			$share = self::create($dsn, $doctrineConfig);
			$share->shareName = $share;
			self::$shareMap->set($shareName, $share);
		}
	}

	public function getConnect($shareId = null)
	{
		$shareId  = $shareId ?: self::$defaultShare;
		return self::$shareMap->get($shareId);
	}

	public function getShareMap()
	{
		return self::$shareMap;
	}

	public function getDefaultShare()
	{
		return self::$defaultShare;
	}

	public function getShareName()
	{
		return $this->shareName;
	}

}       
