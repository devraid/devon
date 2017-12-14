<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class contains several static functions.
 */
class Util
{
	/**
	 * Detects mobiles/tablets
	 * 
	 * @return boolean
	 */
	static public function isMobileOrTablet()
	{
		$detect = new Mobile_Detect;
		if ($detect->isMobile() || $detect->isTablet()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
