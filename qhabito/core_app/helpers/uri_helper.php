<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class contains several static functions related to URIs.
 */
class Uri
{
	/**
	 * Encodes an URL.
	 * 
	 * This function is equivalent to the JavaScript's encodeURI function. More info:
	 * http://stackoverflow.com/a/6059053/1704895
	 * 
	 * @param string $url URL
	 * 
	 * @return string
	 */
	static public function encode($url)
	{
		// http://php.net/manual/en/function.rawurlencode.php
		// https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/encodeURI
		$unescaped = [
			'%2D' => '-', '%5F' => '_' , '%2E' => '.' , '%21' => '!', '%7E' => '~',
			'%2A' => '*', '%27' => "'", '%28' => '(', '%29'=>')'
		];
		$reserved = [
			'%3B' => ';', '%2C' => ',', '%2F' => '/', '%3F' => '?', '%3A' => ':',
			'%40' => '@', '%26' => '&', '%3D' => '=', '%2B' => '+', '%24' => '$'
		];
		$score = [
			'%23' => '#'
		];
		return strtr(rawurlencode($url), array_merge($reserved,$unescaped,$score));
	}
}
