<?php

class ImageController extends \Kernel\Yaf\Controller
{
	public function indexAction()
	{
		
		$imagine = new Imagine\Gd\Imagine();
		// or
		//$imagine = new Imagine\Imagick\Imagine();
		// or
		//$imagine = new Imagine\Gmagick\Imagine();

		$size    = new Imagine\Image\Box(100, 100);

		$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
		// or
		//$mode    = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

		$imagine->open(APPLICATION_PATH . '/test1.jpg')
		    ->thumbnail($size, $mode)
		    ->save(APPLICATION_PATH . '/test.jpg');
		$this->json([]);
	}

	/**
	 * 打水印
	 */
	public function WatermarkingAction()
	{
		$imagine = new Imagine\Gd\Imagine();
		$watermark = $imagine->open(APPLICATION_PATH . '/test.jpg');
		$image     = $imagine->open(APPLICATION_PATH . '/test1.jpg');
		$size      = $image->getSize();
		$wSize     = $watermark->getSize();
		var_dump($size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight());
		$bottomRight = new Imagine\Image\Point($size->getWidth() - $wSize->getWidth(), $size->getHeight() - $wSize->getHeight());

		$image->paste($watermark, $bottomRight);
		$image->save(APPLICATION_PATH . '/test2.jpg');
		$this->json([]);
	}
}