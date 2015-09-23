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
}

