<?php

class EmailController extends \Kernel\Yaf\Controller
{
	public function indexAction()
	{
		try{
			$transport = (new Swift_SmtpTransport('smtp.xxx.com', 25))
		  		->setUsername('xxx@xxx.com')
		  		->setPassword('password');

			// Create the Mailer using your created Transport
			$mailer = new Swift_Mailer($transport);

			// Create a message
			$message = (new Swift_Message('Wonderful Subject'))
			  ->setFrom(['bibin@cloudcc.com' => '发件人姓名'])
			  ->setTo(['bwk0d01@sp.noahwm.com' => '收件人姓名'])
			  ->setBody('Here is the message itself');

			// Send the message
			$result = $mailer->send($message);
			//成功返回1，失败抛异常
		}catch(\Exception $e){
			//print_r($e);
		}
		
		$this->json([]);
	}
}