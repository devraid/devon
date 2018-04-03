<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {
	
	public function index() {
		//print_r($this->uri->segments);
		//print_r($this->input->get());
		//print_r($this->uri->segment('2'));
		//die();
		
		// Language
		$data['language'] = 'es';
		
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
		$this->load->model('rent_model');
		$data['location'] = $this->rent_model->get_location();
		$data['data'] = $data;
		
		// View
		$this->load->view('rent', $data);
	}
}
