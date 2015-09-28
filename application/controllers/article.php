<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

    /*Выбор конкретной статьи*/
    public function view($title) {
       
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        $this->load->library('form_validation');
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['latest_articles'] = $this->pages_model->get_latest_articles();
        $data['comments'] = $this->articles_model->get_comments($title);
        $name = 'article';
        
        if ($this->input->post('add')) {
            
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->comment_rules);
            $check = $this->form_validation->run();
            
            if($check) {
               
                $comment_data['author_comm'] = $this->input->post('author');
                $comment_data['comment'] = $this->input->post('comment');
                $comment_data['avatar_comm'] = $this->input->post('avatar');
                $comment_data['title_url'] = $this->input->post('title_url');
                $comment_data['category'] = $this->input->post('category');
                $comment_data['date_comm'] = date('Y-m-d');
                $comment_data['time_comm'] = date('H:i:s');
                
                $this->articles_model->add_comment($comment_data); 
                redirect(base_url(). 'index.php/article/' . $title);
            }
            else {
                
                $this->template->page_view($data, $name);
            }
        }
        else {
            $this->template->page_view($data, $name);
        }
    }
}