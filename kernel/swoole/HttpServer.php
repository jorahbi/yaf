<?php

namespace Kernel\Swoole;

use Kernel\Swoole\Server\Doctrine;

class HttpServer
{
    protected static $instance;
    protected $http;
    protected $application;
    protected static $request;
    protected static $container;

    public function __construct() 
    {
        define('APPLICATION_PATH', dirname(dirname(__DIR__)));
        define('APP_ENVIRON', ini_get('yaf.environ'));
        \Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
        $this->http = new \Swoole\Http\Server("127.0.0.1", 9501);
        $this->http->set([
            'worker_num' => 16, //工作线程
            'daemonize' => false, //是否是守护线程
            'max_request' => 10000, //最大请求数
            'dispatch_mode' => 1, //工作模式
            'upload_tmp_dir' => '/tmp/upload_file'
            //'task_worker_num' => 10, //
        ]);
        
        \Yaf\Registry::set('container', new \Kernel\Yaf\Container());
        $this->http->on('WorkerStart' , [$this , 'onWorkerStart']);
        $this->http->on('Request', [$this , 'onRequest']);
        // $http->on('Task', [$this , 'onTask']);
        // $http->on('Receive', [$this, 'onReceive']);
        // $http->on('Finish', [$this, 'onFinish']);
        $this->http->start();
    }

    public function onReceive ($serv, $fd, $from_id, $data)
    {

    }

    public function onFinish($serv, $data)
    {

    }

    public function onTask($serv, $task_id, $from_id, $sql)
    {
    }

    public function onRequest ($request, $response) 
    {
        \Yaf\Registry::get('container')->get('request')->initialization($request);
        /*if( isset($request->server) ) {
            HttpServer::$server = $request->server;
        }else{
            HttpServer::$server = [];
        }
        if( isset($request->header) ) {
            HttpServer::$header = $request->header;
        }else{
            HttpServer::$header = [];
        }
        if( isset($request->get) ) {
            HttpServer::$get = $request->get;
        }else{
            HttpServer::$get = [];
        }
        if( isset($request->post) ) {
            HttpServer::$post = $request->post;
        }else{
            HttpServer::$post = [];
        }*/
        print_r($request);
        // TODO handle img
        ob_start();
        //setcookie('key', 'value', time() + 3600);
        try {
            $swooleRequest = new \Yaf\Request\Http($request->server['request_uri']);
            $this->application->bootstrap()->getDispatcher()->dispatch($swooleRequest);
            
            // unset(Yaf_Application::app());
        } catch ( \Yaf\Exception $e ) {
            var_dump( $e );
        }
        
        $result = ob_get_contents();
        ob_end_clean();
        // add Header
        
        // add cookies
        
        // set status

        $response->end($result);
       // $response->end($result);
    }

    public function onWorkerStart(\Swoole\Server $server, int $worker_id) 
    {   
        \Yaf\Registry::set( 'server', $worker_id);
        $this->application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");
        //Doctrine::initialization();
    }

    public static function getInstance() 
    {
        if (!self::$instance) 
        {
            self::$instance = new HttpServer;
        }
        return self::$instance;
    }
}
\Kernel\Swoole\HttpServer::getInstance();