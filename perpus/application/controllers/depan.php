<?php
class Depan extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_buku');
        
    }
    
    function index(){
        $data['title']="Home";
        $data['depan']=$this->m_buku->semuaFront();
        $this->load->view('depan/index',$data);
    }

    function koleksi($id){
        $data['buku']=$this->m_buku->detail($id)->row();
        $this->load->view('depan/detail',$data);
    }    
    
    function logout(){
        $this->session->unset_userdata('username');
        redirect('web');
    }
}