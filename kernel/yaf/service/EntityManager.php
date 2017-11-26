<?php

namespace Kernel\Yaf\Service;

use Doctrine\ORM\EntityManager as DoctrinetEntityManager;
use Doctrine\Common\Collections\ArrayCollection ;

/**
 * 数据库连接
 */
class EntityManager extends DoctrinetEntityManager
{
	protected static $defaultShareName;
	protected static $shareMap;
	protected $shareName;

	public function __construct()
	{
		self::$shareMap = new ArrayCollection();
		$DBConfig = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/database.ini', APP_ENVIRON);
		$appConfig= new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini');
		$shares = explode(',', $DBConfig->database->share);
		self::$defaultShareName = $shares[0];
		$doctrineConfig = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration([$appConfig->common->application->orm->yml], false);
		foreach ($shares as $shareName) 
		{
			$dsn = [
				'driver' => $DBConfig->$shareName->driver,
				'user' => $DBConfig->$shareName->user,
				'password' => $DBConfig->$shareName->pwd,
				'host' => $DBConfig->$shareName->host,
				'dbname' => $DBConfig->$shareName->dbname,
			];
			$share = self::create($dsn, $doctrineConfig);
			$share->shareName = $shareName;
			self::$shareMap->set($shareName, $share);
		}
	}

	public function getConnect($shareId = null)
	{
		$shareId  = $shareId ?: self::$defaultShareName;
		return self::$shareMap->get($shareId);
	}

	public function getShareMap()
	{
		return self::$shareMap;
	}

	public function getDefaultShareName()
	{
		return self::$defaultShareName;
	}

	public function getShareName()
	{
		return $this->shareName;
	}

}       
