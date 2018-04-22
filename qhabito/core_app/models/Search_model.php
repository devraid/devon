<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	private $results = [];
	
	public function __construct() {
		parent::__construct();
	}
	
	public function make() {
		// Search term
		$term = '' . $this->input->post('t', true);
		
		if (!$term) {
			echo 'No direct script access allowed';
			die();
		}
		
		// Cache off
		$this->db->cache_on();
		
		// Vars
		$arr1 = $arr2 = [];
		
		// Cities
		$query = $this->db->select('name, slug')->from('city')->like('name', '' . $term, 'after')->order_by('name', 'asc')->limit(5)->get();
		$arr1 = $query->result();
		if(sizeof($arr1) < 5) {
			$query = $this->db->select('name, slug')->from('city')->like('name', '' . $term, 'both')->order_by('name', 'asc')->limit(5)->get();
			$arr2 = $query->result();
		}
		$arr1 = array_merge($arr1, $arr2);
		if($arr1) {
			$arr1 = array_map(function($item) {
				return (object)array(
					'name' => $item->name . ', ciudad',
					'slug' => '' . $item->slug
				);
			}, $arr1);
		}
		
		// Provinces
		$query = $this->db->select('name, slug')->from('province')->like('name', '' . $term, 'both')->order_by('name', 'asc')->limit(5)->get();
		$arr2 = $query->result();
		if($arr2) {
			$arr2 = array_map(function($item) {
				return (object)array(
					'name' => $item->name . ', provincia',
					'slug' => 'provincia-' . $item->slug
				);
			}, $arr2);
		}
		
		// Cache off
		$this->db->cache_off();

		// Results
		$result = array_slice(array_merge($arr1, $arr2), 0, 11);
		$result = array_map("unserialize", array_unique(array_map("serialize", $result)));
		$this->results = [];
		foreach($result as $item) {
			if (is_object($item)) {
				array_push($this->results,
					array(
						'name' => $item->name,
						'slug' => $item->slug
					)
				);
			}
		}
	}
	
	public function get_data() {
		return $this->results;
	}
	
}