<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {
    
    public function get_all_articles() {
        
        $query = $this->db->get('articles');
        
        return $query->result_array();
    }
    
    public function get_cat_articles($cat) {
        
        $this->db->where('category_art', $cat);
        $query = $this->db->get('articles');
        
        return $query->result_array();
    }
}