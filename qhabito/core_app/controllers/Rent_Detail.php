<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_Detail extends CI_Controller {
	
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
		
		// Model
		$data['data'] = $data;
		
		// View
		$this->load->view('rent_detail', $data);
	}
}
