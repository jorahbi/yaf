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
        $result = new \Yaf\Config\Ini(APPLICATION_PATH . '/conf/application.ini');
        $config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration([$result->common->application->orm->yml], true);

        $conn = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'root',
            'host' => '127.0.0.1',
            'dbname' => 'test',
        );
        
        $entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

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

        $this->json(['front' => 'bbb']);
        //return true;
    }


    public function testAction()
    {
        \Yaf\Dispatcher::getInstance()->disableView();
        //$result = \Yaf\Loader::import(APPLICATION_PATH . '/vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php');
        
        //var_dump(new \Doctrine\Common\ClassLoader());
        //var_dump(new \Symfony\Component\Yaml\Command\LintCommand());
        $driver = Doctrine\ORM\Mapping\Driver\YamlDriver();
        $driver = new YamlDriver(array('/path/to/files'));
        $config->setMetadataDriverImpl($driver);
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


    public function test1Action()
    {
        var_dump('admin test1');
        return false;
    }
}
