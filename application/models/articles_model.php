<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {
    
    public function get_all_articles($num, $offset) {
        
        $query = $this->db->get('articles', $num, $offset);
        
        return $query->result_array();
    }
    
    public function get_cat_articles($cat) {
        
        $this->db->where('category', $cat);
        $query = $this->db->get('articles');
        
        return $query->result_array();
    }
    
    public function get_article($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('articles');
        
        return $query->row_array();
    }
    
    public function add_comment($add) {
        
        $this->db->insert('comments', $add);
    }
}