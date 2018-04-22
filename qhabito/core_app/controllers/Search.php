<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index($id = NULL) {
		// CSRF
		$data['csrf_exp'] = '' . $this->config->item('csrf_expire');
		
		// Dictionary model
		$this->load->model('dictionary_model');
		$this->dictionary_model->make(TRUE); // TRUE ON REST APIS
		/*$data['language'] = $this->dictionary_model->get_language();
		$data['dictionary'] = $this->dictionary_model->get_all();*/
		
		// Model
		$this->load->model('search_model');
		$this->search_model->make();
		$data['data'] = $this->search_model->get_data();
		
		// Return data
		$this->output->set_content_type('application/json', 'utf-8')->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
		exit;
	}
}
