<?php 

namespace Kernel\Yaf;

use Swoole\Http\Request as SwooleRequest;

class Request extends \Yaf\Request\Http
{
    protected $cookies;
    protected $header;
    protected $server;
    protected $files;
    protected $swooleRequest;
    public $mailer;

    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
    }

    public function initialization(SwooleRequest $request)
    {
        $this->swooleRequest = $request;
        $this->server = $_SERVER;
        //cookie
    }

    public function getCookie($key = '')
    {

    }

    public function getServer($name, $default = null)
    {
        return array_merge($this->server, $this->swooleRequest->server);
    }

    public function getFiles($key = '')
    {
        return $this->swooleRequest->files;
    }

    public function getPost($key = '')
    {
        return $this->swooleRequest->post;
    }

    public function getHeader($key = '')
    {

    }

    public function isPost()
    {
        return $this->swooleRequest->server['request_method'] === 'POST';
    }

    public function isGet()
    {
        return $this->swooleRequest->server['request_method'] === 'GET';
    }

    public function isXmlHttpRequest()
    {

    }

    public function getMethod()
    {
        return $this->swooleRequest->server['request_method'];
    }

    
}