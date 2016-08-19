<?php
class Home extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_buku');
        $this->load->library(array('template'));
        
    }
    
    function index(){
        $data['title']="Home";
        
        $this->load->view('home/index',$data);
    }
    
    
}