<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {
	
	public function index() {
		//print_r($this->uri->segments);
		//print_r($this->input->get());
		//print_r($this->uri->segment('2'));
		//die();
		
		// CSRF
		$data['csrf_exp'] = '' . $this->config->item('csrf_expire');
		
		// Touch device
		$data['device'] = 'desktop';
		if (Util::isMobileOrTablet() === TRUE) {
			$data['device'] = 'mobile-tablet';
		}
		
		// Cookies: Grid or list
		$data['list_type'] = 'grid';
		if ((boolean)json_decode(get_cookie('qh_list')) === TRUE) {
			$data['list_type'] = 'list';
		}
		
		// Dictionary model
		$this->load->model('dictionary_model');
		$data['language'] = $this->dictionary_model->get_language();
		/*$data['dictionary'] = $this->dictionary_model->get_words(array('home', 'faqs', 'contact', 'applied_filters', 'view_in_detail', 'sitemap', 'about_us', 'advertising', 'general_conditions', 'privacy_policy', 'newsletter', 'email', 'all_rights_reserved', 'users_area', 'send', 'rent', 'vacational', 'buy', 'essentials', 'cookies_msg', 'more_info', 'close', 'search', 'other_features', 'search_placeholder', 'month', 'room', 'bathroom', 'any', 'or_more', 'rooms', 'price', 'min', 'max', 'size', 'equipment', 'elevator', 'laundry', 'fitness_center', 'reception', 'door_station', 'pool', 'storage_room', 'private_garage', 'community_garage', 'air_conditioner', 'central_heating', 'balcony', 'garden', 'terrace', 'marble_floors', 'wooden_floors', 'washing_machine', 'dryer', 'dishwasher', 'oven', 'closet', 'fitted_wardrobes', 'jacuzzi', 'hydromassage', 'nearby_pharmacy', 'nearby_supermarket', 'nearby_playground', 'nearby_school', 'nearby_high_school', 'nearby_university', 'nearby_bus', 'nearby_subway', 'nearby_train', 'community_fees', 'condition', 'as_new', 'good_condition', 'new_construction', 'to_be_reformed', 'pets', 'pets_ok', 'no_pets', 'only_cats', 'only_dogs', 'furnished', 'unfurnished', 'semifurnished', 'equipped_kitchen', 'basement', 'ground_floor', 'mezzanine', 'intermediate_floor', 'top_floor', 'flat', 'penthouse', 'duplex', 'studio', 'loft', 'house_or_chalet', 'housing_type', 'relevance', 'most_recent', 'oldest_first', 'lowest_price', 'highest_price', 'level_floor'));*/
		$data['dictionary'] = $this->dictionary_model->get_all();
		
		// Rent model
		$this->load->model('rent_model');
		$data['location'] = $this->rent_model->get_location();
		
		// Data
		$data['data'] = $data;
		
		// View
		$this->load->view('rent', $data);
	}
}