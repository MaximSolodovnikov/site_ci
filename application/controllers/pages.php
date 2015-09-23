<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function index() {
        redirect(base_url());
    }
    
    public function page($title) {
        
        /*$this->load->library('template'); --- установлено в автозагрузке*/
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info($title);
        $this->template->page_view($data);
    }
}

