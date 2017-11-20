<?php

namespace Kernel\Yaf;

abstract class Controller extends \Yaf\Controller_Abstract
{
    protected function json(Array $body = [])
    {
        \Yaf\Dispatcher::getInstance()->disableView();
        $response = new \Yaf\Response\Http();
        $response->setHeader('Content-Type', 'application/json;charset=utf-8');
        $response->setBody(json_encode($body));
        $response->response();
        return $response;
    }
}