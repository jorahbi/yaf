<?php
/**
 * @name IndexController
 */



class IndexController extends \Kernel\Yaf\Controller {

	/** 
	 * 默认动作
	 */
	public function indexAction($name = "Stranger") {
		//1. fetch query
		/*$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$model = new SampleModel();
		//3. assign
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
		return TRUE;*/
		/*$result = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini');
		$config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration([$result->common->application->orm->yml], true);

		$conn = array(
			'driver' => 'pdo_mysql',
			'user' => 'root',
			'password' => 'root',
			'host' => '127.0.0.1',
			'dbname' => 'test',
		);
		
		$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);*/

		/*$model = new \Entity\KoActivityQinziRate();
		$model->setMinInvestAmount(1)
			  ->setIncomeRate('aaa')
			  ->setIncomeRange('bb')
			  ->setType(10)
			  ->setCreatedTime(time())
			  ->setUpdatedTime(time());

		

		$entityManager->persist($model);
		$entityManager->flush();*/
		/*$productRepository = $entityManager->getRepository('\\Entity\\KoActivityQinziRate');
		$products = $productRepository->findAll();
		print_r($products);*/
		//\Yaf\Registry::get('doctrine');
		//print_r($_FILES);
		$test = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/container.ini');
		$this->json([
			//'aaa' => get_class(\Yaf\Registry::get('doctrine-master')),
			//'bbb' => get_class(\Yaf\Registry::get('doctrine-slave')),
			'request' => $this->getRequest()->getPost(),
			'files' => $this->getRequest()->getFiles(),
			'requestMethod' => $this->getRequest()->getMethod(),
			'response' => get_class($this->getResponse()),
			'container' => (new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/container.ini'))->toArray()
			//'server' => $_SERVER
			//'response' => get_class_methods($this->getResponse())
		]);
		//return true;
	}


	public function testAction()
	{
		\Yaf\Dispatcher::getInstance()->disableView();
		\Swoole\Timer::after(1000, function(){
			var_dump(class_exists('\Swoole\Timer'));	
		});
		
		//var_dump(\Yaf\Registry::get('container')->has('em_pool'));
		//var_dump(\Yaf\Registry::get('container')->get('em_pool'));
		//$shareMap = \Yaf\Registry::get('container')->get('em_pool')->getShareMap();

		//var_dump($shareMap->get('slave')->isEmpty());
		//var_dump($shareMap->get('slave')->count());
		$connect = \Yaf\Registry::get('container')->get('em_pool')->getConnect();
		var_dump($connect->card);
		//\Yaf\Registry::get('container')->get('em_pool')->unlock($connect);
		/*var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);
		var_dump(\Yaf\Registry::get('container')->get('em_pool')->getConnect()->card);*/
		//print_r(\Yaf\Registry::get('container')->get('em_pool')->getConnect());

		/*foreach ($shareMap->get('master') as $value) 
		{
			print_r($value);
		}*/
	}


	public function doctrineAction()
	{
		\Yaf\Dispatcher::getInstance()->disableView();
		$isDevMode = true;
		$config = Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration(array(APPLICATION_PATH."/application/schema/ko_accredited_inverstor.yml"), $isDevMode);
		$conn = [
			'driver' => 'pdo_mysql',
			'user' => 'root',
			'password' => 'root',
			'host' => '127.0.0.1',
			'dbname' => 'test'
		];
		$entityManager = Doctrine\ORM\EntityManager::create($conn, $config);
	}


	
}
