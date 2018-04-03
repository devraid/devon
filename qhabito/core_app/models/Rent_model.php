<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_model extends CI_Model {

	private $location = array(
		'city' => array(
			'name' => '',
			'slug' => ''
		),
		'province' => array(
			'name' => '',
			'slug' => ''
		),
		'community' => array(
			'name' => '',
			'slug' => ''
		)
	);
	
	public function __construct() {
		parent::__construct();
		
		// Location
		if($this->uri->total_segments() > 1) { // It means we have a location
			$slug = $this->uri->segment('2');
			$location = null;
			$type = '';
			
			// Check if it's a community
			if(strpos($slug, 'comunidad-') !== false) { // it looks like a community
				$slug = substr_replace($slug, '', 0, strlen('comunidad-'));
				$location = $this->get_community_by_slug($slug);
				if ($location) { // We have a community
					$type = 'community';
					
					$this->location['community']['name'] = $location->name;
					$this->location['community']['slug'] = 'alquiler/comunidad-'.$location->slug;
				}
			}
			
			// Check if it's a province
			if(strpos($slug, 'provincia-') !== false) { // it looks like a province
				$slug = substr_replace($slug, '', 0, strlen('provincia-'));
				$location =  $this->get_province_by_slug($slug);
				if ($location) { // We have a province
					$type = 'province';
					
					$this->location['province']['name'] = $location->name;
					$this->location['province']['slug'] = 'alquiler/provincia-'.$location->slug;
					
					$community = $this->get_community_by_id($location->community_id);
					if ($community) {
						$this->location['community']['name'] = $community->name;
						$this->location['community']['slug'] = 'alquiler/comunidad-'.$community->slug;
					}
				}
			}
			
			// Check if it's a city
			if (!$location) {
				$location = $this->get_city_by_slug($slug);
				if ($location) { // We have a city
					$type = 'city';
					
					$this->location['city']['name'] = $location->name;
					$this->location['city']['slug'] = 'alquiler/'.$location->slug;
					
					$province = $this->get_province_by_id($location->province_id);
					if ($province) {
						$this->location['province']['name'] = $province->name;
						$this->location['province']['slug'] = 'alquiler/provincia-'.$province->slug;
						
						$community = $this->get_community_by_id($province->community_id);
						if ($community) {
							$this->location['community']['name'] = $community->name;
							$this->location['community']['slug'] = 'alquiler/comunidad-'.$community->slug;
						}
					}
				}
			}
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