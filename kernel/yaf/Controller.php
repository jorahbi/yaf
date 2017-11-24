<?php

namespace Kernel\Yaf;

use Kernel\Swoole\HttpServer;
use Yaf\Registry;

abstract class Controller extends \Yaf\Controller_Abstract
{
    protected $doctrine = null;
    private $response = null;

    private function _getResponse()
    {
        if(empty($this->response))
        {
            $this->response = new \Yaf\Response\Http();
        }
    }

    protected function json(Array $body = [])
    {
        \Yaf\Dispatcher::getInstance()->disableView();
        $response = new \Yaf\Response\Http();
        $response->setHeader('Content-Type', 'application/json;charset=utf-8');
        $response->setBody(json_encode($body));
        $response->response();
        return $response;
    }

    public function getRequest()
    {
        return Registry::get('container')->get('request');
    }

    public function get($key)
    {
        if(Registry::get('container')->has($key))
        {
            return  Registry::get('container')->get($key);
        }
        //没有抛异常
    }

    protected function setCookie()
    {
    }
     
    protected function setHeader()
    {
    }   
}