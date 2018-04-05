<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorites extends CI_Controller {
	
	public function index() {
		// Language
		$data['language'] = 'es';
		
		// CSRF
		$data['csrf_exp'] = '' . $this->config->item('csrf_expire');
		
		// Touch device
		$data['device'] = 'desktop';
		if (Util::isMobileOrTablet() === TRUE) {
			$data['device'] = 'mobile-tablet';
		}
		
		// Cookies: Grid or list
		$data['list_type'] = 'grid';
		if ((boolean)json_decode(get_cookie('qh_list')) === TRUE) {
			$data['list_type'] = 'list';
		}
		
		// Model
		$data['data'] = $data;
		
		// View
		$this->load->view('favorites', $data);
	}
}
