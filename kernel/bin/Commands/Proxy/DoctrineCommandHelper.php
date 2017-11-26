<?php

namespace Commands\Proxy;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;
use Doctrine\ORM\Version;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;

class DoctrineCommandHelper extends ConsoleRunner
{
	/**
	 * Creates a console application with the given helperset and
	 * optional commands.
	 *
	 * @param \Symfony\Component\Console\Helper\HelperSet $helperSet
	 * @param array $commands
	 *
	 * @return \Symfony\Component\Console\Application
	 */
	public static function createApplication(HelperSet $helperSet, $commands = array())
	{
		$cli = new Application('Doctrine Command Line Interface', Version::VERSION);
		$cli->setCatchExceptions(true);
		$cli->setHelperSet($helperSet);
		self::addCommands($cli);
		$cli->addCommands($commands);

		return $cli;
	}

	/**
	 * @param Application $cli
	 *
	 * @return void
	 */
	public static function addCommands(Application $cli)
	{
		$cli->addCommands([
			// DBAL Commands
			new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(),
			new \Doctrine\DBAL\Tools\Console\Command\ImportCommand(),

			 // ORM Commands
			new \Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand(),
			new \Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand(),
			new \Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand(),
			new \Commands\ConvertMappingCommand(),
			new \Commands\GenerateRepositoriesCommand(),
			new \Commands\GenerateEntitiesCommand(),
			new \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand(),
			new \Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand(),
			new \Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand(),
			new \Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand(),
			//Amqp
			new \Amqp\MQClientCommand()
		]);
	}

	public static function getEntityManager()
	{
		//$isDevMode = true;
		//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
		// or if you prefer yaml or annotations
		//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
		//$config = Setup::createYAMLMetadataConfiguration([YML_DIRECTORY], IS_DEBUG);
		$connect = null;
		try{
			$config = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/database.ini', APP_ENVIRON);
			$connect =  \Doctrine\ORM\EntityManager::create([
					'driver' => $config->master->driver,
					'user' => $config->master->user,
					'password' => $config->master->pwd,
					'host' => $config->master->host,
					'dbname' => $config->master->dbname,
				], 
				Setup::createYAMLMetadataConfiguration([YML_DIRECTORY], IS_DEBUG)
			);
		}catch(\Exception $e){
			die($e->getMessage());
		}

		return $connect;
	}

	/**
	 * Runs console with the given helperset.
	 *
	 * @param \Symfony\Component\Console\Helper\HelperSet  $helperSet
	 * @param \Symfony\Component\Console\Command\Command[] $commands
	 *
	 * @return void
	 */
	static public function run(HelperSet $helperSet, $commands = array())
	{
		$cli = self::createApplication($helperSet, $commands);
		$cli->run();
	}

	public static function start()
	{
	   
		$helperSet = parent::createHelperSet(self::getEntityManager());
		self::run($helperSet);
	}
}