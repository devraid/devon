<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function make() {
		// Location model
		$this->load->model('location_model');
		$this->location_model->make();
	}
	
	public function get_provinces() {
		return $this->location_model->get_provinces();
	}
	
}