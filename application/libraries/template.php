<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Template {

    public function page_view($data, $name)
    {
        $CI =& get_instance();

        $CI->load->view('blocks/preheader_view', $data);
        $CI->load->view('blocks/header_view');
        $CI->load->view('blocks/menu_view', $data);
        $CI->load->view($name . '_view', $data);
        $CI->load->view('blocks/authorization_view');
        $CI->load->view('blocks/rightblock_view', $data);
        $CI->load->view('blocks/footer_view');
    }
}