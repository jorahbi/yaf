<?php 

namespace Kernel\Yaf;

use Yaf\Registry;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class Container extends ContainerBuilder
{

	private static $instance;

	public function __construct()
	{
		parent::__construct();
		$config = (new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/service.ini'))->toArray();
		foreach ($config['parameters'] as $key => $value) 
		{
			$this->setParameter($key, $value);
		}
		foreach ($config['services'] as $key => $value) 
		{
			if(!class_exists($value['class']))
			{
				throw new \Exception('class not found', 1);
			}
			$service = $this->register($key, $value['class']);
			if(isset($value['arguments']))
			{
				$constructArgs = explode(',', $value['arguments']);
				foreach ($constructArgs as $arg) 
				{
					$service->addArgument($this->preArgs(trim($arg)));
				}
			}
			if(isset($value['calls'] ))
			{
				foreach ($value['calls'] as $methodName => $arg) 
				{
					$service->addMethodCall($methodName, [$this->preArgs(trim($arg))]);
				}
			}									
		}

	}

	protected function preArgs($arg)
	{
		if(strpos($arg, '@') !== false)
		{
			return new Reference(trim($arg, '@'));
		}
		return $arg;
	}
}