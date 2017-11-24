<?php

namespace Kernel\Swoole\Server;

use Doctrine\ORM\EntityManager;
use Yaf\Registry;

/**
 * 数据库连接
 */
class Doctrine
{
    public static $test = 0;

    public static function setConnect(EntityManager $em, $shareId = null, $replace = true)
    {
        $shareId = 'doctrine-' . $shareId;
        if($replace)
        {
            Registry::set( $shareId, $em);
            return true;
        }

        if(!Registry::has($shareId))
        {
            Registry::set( $shareId, $em);
        }
        return true;
    }

    public static function getConnect($shareId = null)
    {

    }

    public static function  initialization()
    {
        $config = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/database.ini', APP_ENVIRON);
        $result = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini');
        $shares = explode(',', $config->database->share);

        foreach ($shares as $share) 
        {
            $doctrineConfig = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration([$result->common->application->orm->yml], true);
            $conn = array(
                'driver' => $config->$share->driver,
                'user' => $config->$share->user,
                'password' => $config->$share->pwd,
                'host' => $config->$share->host,
                'dbname' => $config->$share->dbname,
            );
           

            Doctrine::setConnect(\Doctrine\ORM\EntityManager::create($conn, $doctrineConfig), $share);
        }
    }
}