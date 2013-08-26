<?php
/**
 * Add text to image
 *
 * @date 2013-08-26
 * @author Jeroen Desloovere <jeroen@siesqo.be>
 */
class AddTextToImage
{
	/**
	 * Background image
	 *
	 * @var string path to image
	 */
	private $backgroundImage;

	/**
	 * Text color
	 *
	 * @var array rgb values
	 */
	private $color;

	/**
	 * Filename
	 *
	 * @var string
	 */
	private $filename;

	/**
	 * Font
	 *
	 * @var string
	 */
	private $font;

	/**
	 * FontSize
	 *
	 * @var string
	 */
	private $fontSize;

	/**
	 * Image
	 *
	 * @var image
	 */
	private $image;

	/**
	 * Images
	 *
	 * @var array
	 */
	private $images;

	/**
	 * Texts
	 *
	 * @var array
	 */
	private $texts;

	/**
	 * Construct
	 *
	 * @param filename
	 */
	public function __construct($filename)
	{
		$this->filename = (string) $filename;
	}

	/**
	 * Add image
	 *
	 * @param $path
	 * @param $x
	 * @param $y
	 */
	public function addImage($path, $x, $y)
	{
		$this->images[] = array(
			'path' => $path,
			'x' => $x,
			'y' => $y
		);
	}

	/**
	 * Add text
	 *
	 * @param $text
	 * @param $x
	 * @param $y
	 */
	public function addText($text, $x, $y)
	{
		$this->texts[] = array(
			'text' => $text,
			'x' => $x,
			'y' => $y
		);
	}

	/**
	 * Set background image
	 *
	 * @param $path to background image
	 */
	public function setBackgroundImage($path)
	{
		$this->backgroundImage = (string) $path;
	}

	/**
	 * Set color
	 *
	 * @param $r
	 * @param $g
	 * @param $b
	 */
	public function setColor($r, $g, $b)
	{
		$this->color['r'] = (int) $r;
		$this->color['g'] = (int) $g;
		$this->color['b'] = (int) $b;
	}

	/**
	 * Parse
	 */
	public function parse()
	{		
		$string = "your text";

		// try changing this as well
		$font = 4;
		$width = imagefontwidth($font) * strlen($string) ;
		$height = imagefontheight($font) ;
		$im = imagecreatefrompng("yourimagefile");
		$x = imagesx($im) - $width ;
		$y = imagesy($im) - $height;
		$backgroundColor = imagecolorallocate($im, 255, 255, 255);
		$textColor = imagecolorallocate($im, 0, 0,0);
		imagestring($im, $font, $x, $y,  $string, $textColor);
		imagepng($im);
		
		// write images
		$this->writeImages();
		
		// write texts
		$this->writeTexts();

		// output headers
		header("Content-type: image/png");
		
		// write image to path
	}

	/**
	 * Write images
	 *
	 * @param
	 */
	private function writeImages()
	{
		foreach($this->images as $image)
		{
			
		}
	}

	/**
	 * Write texts
	 *
	 * @param
	 */
	private function writeTexts()
	{
		foreach($this->texts as $text)
		{
			// bool imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
		}
	}
}
