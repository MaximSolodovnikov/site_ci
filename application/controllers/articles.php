<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {
      
    public function index() {
       
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info('articles');
        $data['categories'] = $this->pages_model->get_cat();
        $data['articles'] = $this->articles_model->get_all_articles();
        $data['latest_articles'] = $this->pages_model->get_latest_articles();
        $name = 'articles';
        $this->template->page_view($data, $name);
    }
    
    /*Выбор статей по категориям*/
    public function cat($cat) {
       
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