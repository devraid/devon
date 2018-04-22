<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dictionary_model extends CI_Model {
	
	private $language = 'en';
	
	public function __construct() {
		parent::__construct();
	}
	
	public function make($rest = FALSE) {
		// Set language
		$slug = $this->uri->segment('1');
		if($slug && $rest === FALSE) {
			$section = $this->db->select('language')->get_where('section', array('slug' => $slug))->row();
			if ($section) {
				$this->set_language('' . $section->language);
			} else {
				redirect('/');
			}
		} else {
			$this->set_language();
		}
	}
	
	public function get_language() {
		return $this->language;
	}
	
	public function set_language($language = NULL) {
		if ($language) {
			$this->language = '' . $language;
			set_cookie('qh_lang', '' . $this->language, '0', '' . $_SERVER['SERVER_NAME'], '/');
		} else {
			$this->language = '' . get_cookie('qh_lang', TRUE);
			if(empty($this->language)) {
				$this->language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2) : 'en';
				set_cookie('qh_lang', '' . $this->language, '0', '' . $_SERVER['SERVER_NAME'], '/');
			}
		}
	}
	
	public function get_words($words) {
		$language = $this->get_language();
		$query = $this->db->select('name, ' . $language .' as value')->from('dictionary')->where_in('name', $words)->get();
		$words = $query->result();
		$results = [];
		foreach($words as $word) {
			$results[$word->name] = $word->value;
			//$results[$word->name] = 'X';
		}
		return $results;
	}
	
	public function get_all() {
		$language = $this->get_language();
		$query = $this->db->select('name, ' . $language .' as value')->from('dictionary')->get();
		$words = $query->result();
		$results = [];
		foreach($words as $word) {
			$results[$word->name] = $word->value;
		}
		return $results;
	}
	
}