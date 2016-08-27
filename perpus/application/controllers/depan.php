<?php
class Depan extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_buku');
        $this->load->model('m_news');
        
    }
    
    function index(){
        $data['title']="Home";
        $data['depan']=$this->m_buku->semuaFront();
        $this->load->view('depan/index',$data);
    }

    function news(){
        $data['title']="News";
        $data['depan']=$this->m_news->semuaFront();
        $this->load->view('depan/news',$data);
    }

    function koleksi($id){
        $data['buku']=$this->m_buku->detail($id)->row();
        $this->load->view('depan/detail',$data);
    } 

    function detail($id){
        $data['buku']=$this->m_news->detail($id)->row();
        $this->load->view('depan/detail_news',$data);
    } 

    function logout(){
        $this->session->unset_userdata('username');
        redirect('web');
    }
}