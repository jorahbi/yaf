<?php
class HttpServer
{
    public static $instance;
    public $http;
    public static $get;
    public static $post;
    public static $header;
    public static $server;
    private $application;

    public function __construct() 
    {
        define('APPLICATION_PATH', dirname(__DIR__));
        \Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
        $http = new swoole_http_server("127.0.0.1", 9501);
        $http->set(
            array(
                'worker_num' => 16,
                'daemonize' => false,
                'max_request' => 10000,
                'dispatch_mode' => 1
            )
        );
        $http->on('WorkerStart' , array( $this , 'onWorkerStart'));
        $http->on('request', function ($request, $response) {
            if( isset($request->server) ) {
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
            }
            // TODO handle img
            ob_start();
            try {
                $yaf_request = new \Yaf\Request\Http( 
                    HttpServer::$server['request_uri']);
                $this->application->getDispatcher()->dispatch($yaf_request);
                
                // unset(Yaf_Application::app());
            } catch ( \Yaf\Exception $e ) {
                var_dump( $e );
            }
            
            $result = ob_get_contents();
            ob_end_clean();
            // add Header
            
            // add cookies
            
            // set status
            print_r(HttpServer::$server);
            $response->end($result);
           // $response->end($result);
        });
        $http->start();
    }
    public function onWorkerStart() {
        
        $this->application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");
        ob_start();
        $this->application->bootstrap()->run();
        ob_end_clean();
    }
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new HttpServer;
        }
        return self::$instance;
    }
}
HttpServer::getInstance();