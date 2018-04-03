<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index($id = NULL) {
		// Model
		$this->load->model('search_model');
		$data['data'] = $this->search_model->get_data();
		
		// Return data
		$this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
		exit;
	}
}
