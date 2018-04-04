<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_model extends CI_Model {

	private $location;
	
	public function __construct() {
		parent::__construct();
		
		// Location model
		if($this->uri->total_segments() > 1) { // It means we have a location
			$this->load->model('location_model');
			$this->location = $this->location_model->get_location();
		}
	}
	
	public function get_location() {
		return $this->location;
	}
	
}