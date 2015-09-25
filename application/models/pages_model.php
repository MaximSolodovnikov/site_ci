<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {
    
    public function get_pages() {
        
        $this->db->where('hidden', 'no');
        $query = $this->db->get('pages');
        
        return $query->result_array(); 
    }
    
    public function get_pages_info($title) {
        
        $this->db->where('title_url_page', $title);
        $query = $this->db->get('pages');
        
        return $query->row_array();
    }
    
    public function get_cat() {
    
        $query = $this->db->get('categories');
        
        return $query->result_array();
    }
    
    public function get_latest_articles() {
        
        $this->db->order_by('id_art', 'desc');
        $this->db->limit('5');
        $query = $this->db->get('articles');
        return $query->result_array();
    }
}

