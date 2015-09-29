<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rules_model extends CI_Model {
    
    public $comment_rules = array(
        
        array (
            
        'field' => 'author',
        'label' => 'Автор', 
        'rules' => 'required'    
            
        ),
        array (
            
        'field' => 'comment',
        'label' => 'Текст комментария', 
        'rules' => 'required' 
        
        ),
        array (
            
        'field' => 'captcha',
        'label' => 'Символы с картинки', 
        'rules' => 'required' 
        
        )
    );
}

