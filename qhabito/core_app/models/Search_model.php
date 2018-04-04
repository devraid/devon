<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	private $data = [];
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_data() {
		// Search term
		$term = '' . $this->input->post('t', true);
		
		if (!$term) {
			echo 'No direct script access allowed';
			die();
		}
		
		// Cache off
		$this->db->cache_on();
		
		// Vars
		$arr1 = $arr2 = $arr3 = $arr4 = $arr5 = [];
		
		// Cities
		$query = $this->db->select('name, slug')->from('city')->like('name', '' . $term, 'after')->order_by('name', 'asc')->limit(5)->get();
		$arr1 = $query->result();
		if(sizeof($arr1) < 5) {
			$query = $this->db->select('name, slug')->from('city')->like('name', '' . $term, 'both')->order_by('name', 'asc')->limit(5)->get();
			$arr2 = $query->result();
		}
		
		// Provinces
		$query = $this->db->select('name, slug')->from('province')->like('name', '' . $term, 'both')->order_by('name', 'asc')->limit(5)->get();
		$arr3 = $query->result();
		if($arr3) {
			$arr3 = array_map(function($item) {
				return (object)array(
					'name' => $item->name . ', provincia',
					'slug' => 'provincia-' . $item->slug
				);
			}, $arr3);
		}
		
		// Communities
		$query = $this->db->select('name, slug')->from('community')->like('name', '' . $term, 'both')->order_by('name', 'asc')->limit(5)->get();
		$arr4 = $query->result();
		if($arr4) {
			$arr4 = array_map(function($item) {
				return (object)array(
					'name' => $item->name . ', comunidad',
					'slug' => 'comunidad-' . $item->slug
				);
			}, $arr4);
		}
		
		// Cache off
		$this->db->cache_off();
		
		$result = array_slice(array_merge($arr1, $arr2, $arr3, $arr4), 0, 11);
		$result = array_map("unserialize", array_unique(array_map("serialize", $result)));
		$results = [];
		foreach($result as $item) {
			if (is_object($item)) {
				array_push($results,
					array(
						'name' => $item->name,
						'slug' => $item->slug
					)
				);
			}
		}
		
		// Results
		return $results;
	}
	
}