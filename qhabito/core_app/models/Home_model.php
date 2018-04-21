<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	private $provinces = array();
	
	public function __construct() {
		parent::__construct();
		
		// Location model
		$this->load->model('location_model');
		$this->provinces = $this->location_model->get_provinces();
	}
	
	public function get_provinces() {
		return $this->provinces;
	}
	
}