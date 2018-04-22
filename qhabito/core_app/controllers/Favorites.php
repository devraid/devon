<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorites extends CI_Controller {
	
	public function index() {
		// CSRF
		$data['csrf_exp'] = '' . $this->config->item('csrf_expire');
		
		// Touch device
		$data['device'] = 'desktop';
		if (Util::isMobileOrTablet() === TRUE) {
			$data['device'] = 'mobile-tablet';
		}
		
		// Dictionary model
		$this->load->model('dictionary_model');
		$this->dictionary_model->make();
		$data['language'] = $this->dictionary_model->get_language();
		$data['dictionary'] = $this->dictionary_model->get_all();
		
		// Data
		$data['data'] = $data;
		
		// View
		$this->load->view('favorites', $data);
	}
}
