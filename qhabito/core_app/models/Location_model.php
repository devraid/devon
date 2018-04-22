<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {
	
	private $location = array();
	
	public function __construct() {
		parent::__construct();
	}
	
	public function make() {
		$slug = $this->uri->segment('2');
		$type = 'city';

		// Province
		if(strpos($slug, 'provincia-') !== false) { // it looks like a province
			$slug = substr_replace($slug, '', 0, strlen('provincia-'));
			$province =  $this->get_province_by_slug($slug);
			if ($province) {
				$type = 'province';
				array_push($this->location, array(
					'name' => $province->name . ', provincia',
					'slug' => 'alquiler/provincia-' . $province->slug
				));
			}
		}

		// City
		if ($type == 'city') {
			$city = $this->get_city_by_slug($slug);
			if ($city) {
				$province = $this->get_province_by_id($city->province_id);
				if ($province) {
					array_push($this->location, array(
						'name' => $province->name . ', provincia',
						'slug' => 'alquiler/provincia-' . $province->slug
					));
				}
				array_push($this->location, array(
					'name' => $city->name . ', ciudad',
					'slug' => 'alquiler/' . $city->slug
				));
			} else {
				$type = 'search';
			}
		}
		
		// Regular search
		if ($type == 'search') {
			$slug = urldecode($slug);
			array_push($this->location, array(
				'name' => 'Búsqueda: ' . str_replace('-', ' ', $slug),
				'slug' => 'alquiler/' . $slug
			));
			
			// TO BE DONE: A keyword search on properties
		}
	}
	
	private function get_city_by_slug($slug) {
		return $this->db->get_where('city', array('slug' => $slug))->row();
	}
	
	private function get_province_by_id($id) {
		return $this->db->get_where('province', array('id' => $id))->row();
	}
	
	private function get_province_by_slug($slug) {
		return $this->db->get_where('province', array('slug' => $slug))->row();
	}
	
	public function get_location() {
		return $this->location;
	}
	
	public function get_provinces() {
		$query = $this->db->select('name, slug, data')->from('province')->order_by('name', 'asc')->get();
		$arr = $query->result();
		if($arr) {
			$arr = array_map(function($item) {
				return (object)array(
					'name' => '' . $item->name,
					'slug' => 'provincia-' . $item->slug,
					'svg' => '' . $item->data
				);
			}, $arr);
		}
		return $arr;
	}
	
	public function init() {
		return $this->location;
	}
	
}