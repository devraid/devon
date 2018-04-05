<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {
	
	private $location = array();
	
	public function __construct() {
		parent::__construct();
		
		$slug = $this->uri->segment('2');
		$type = 'city';

		// Check if it's a community
		if(strpos($slug, 'comunidad-') !== false) { // it looks like a community
			$slug = substr_replace($slug, '', 0, strlen('comunidad-'));
			$community = $this->get_community_by_slug($slug);
			if ($community) { // We have a community
				$type = 'community';
				array_push($this->location, array(
					'name' => $community->name . ', comunidad',
					'slug' => 'alquiler/comunidad-' . $community->slug
				));
			}
		}

		// Check if it's a province
		if(strpos($slug, 'provincia-') !== false) { // it looks like a province
			$slug = substr_replace($slug, '', 0, strlen('provincia-'));
			$province =  $this->get_province_by_slug($slug);
			if ($province) { // We have a province
				$type = 'province';
				$community = $this->get_community_by_id($province->community_id);
				if ($community) { // We find the community
					array_push($this->location, array(
						'name' => $community->name . ', comunidad',
						'slug' => 'alquiler/comunidad-' . $community->slug
					));
				}
				array_push($this->location, array(
					'name' => $province->name . ', provincia',
					'slug' => 'alquiler/provincia-' . $province->slug
				));
			}
		}

		// Check if it's a city
		if ($type == 'city') {
			$city = $this->get_city_by_slug($slug);
			if ($city) { // // We find the province
				$province = $this->get_province_by_id($city->province_id);
				if ($province) {
					$community = $this->get_community_by_id($province->community_id);
					if ($community) { // We find the community
						array_push($this->location, array(
							'name' => $community->name . ', comunidad',
							'slug' => 'alquiler/comunidad-' . $community->slug
						));
					}
					array_push($this->location, array(
						'name' => $province->name . ', provincia',
						'slug' => 'alquiler/provincia-' . $province->slug
					));
				}
				array_push($this->location, array(
					'name' => $city->name,
					'slug' => 'alquiler/' . $city->slug
				));
			} else {
				$type = 'search';
			}
		}
		
		// None of above
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
	
	private function get_community_by_slug($slug) {
		return $this->db->get_where('community', array('slug' => $slug))->row();
	}
	
	private function get_community_by_id($id) {
		return $this->db->get_where('community', array('id' => $id))->row();
	}
	
	public function get_location() {
		return $this->location;
	}
	
}