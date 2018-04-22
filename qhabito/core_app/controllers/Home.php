<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
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
		
		// Home model
		$this->load->model('home_model');
		$this->home_model->make();
		$data['provinces'] = $this->home_model->get_provinces();
		
		// Data
		$data['data'] = $data;
		
		// View
		$this->load->view('home', $data);
	}
}
