<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

    /*Выбор конкретной статьи*/
    public function view($title) {
       
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_latest_articles();
        $name = 'article';
        $this->template->page_view($data, $name);
    }
}