<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {
      
    public function index() {
       
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'index.php/articles/index/';
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = 1; 
        $config['full_tag_open'] = "<p id='pagination'>";
        $config['full_tag_close'] = '</p>';
        
        $this->pagination->initialize($config); 
        
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_all_articles($config['per_page'],$this->uri->segment(3));
        $data['latest_articles'] = $this->pages_model->get_latest_articles();
        $name = 'articles';
        $this->template->page_view($data, $name);
    }
    
    /*Выбор статей по категориям*/
    public function cat($cat) {
       
        $this->load->library('pagination');
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_cat_articles($cat);
        $data['latest_articles'] = $this->pages_model->get_latest_articles();
        $name = 'articles';
        $this->template->page_view($data, $name);
    }
}