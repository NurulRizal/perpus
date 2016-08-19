<?php
class Subject extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_subject');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='id_subject',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_subject';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['subject']=$this->m_subject->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Subject";
        
        $config['base_url']=site_url('subject/index/');
        $config['total_rows']=$this->m_subject->jumlah();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('subject/index',$data);
    }
    
    
    function tambah(){
        $data['title']="Tambah Subject";
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar             
            if($this->m_subject->validation($this->input->post('subject'))->num_rows == 0){
                $info=array(
                    'nama_subject'=>$this->input->post('subject'),
                    
                );
                $this->m_subject->simpan($info);
                redirect('subject/index/add_success');
            } else {
                $data['message']="<div class='alert alert-danger'>Nama Subject sudah ada</div>";
                $this->template->display('subject/tambah',$data);
            }
            
        }else{
            $data['message']="";
            $this->template->display('subject/tambah',$data);
        }
    }
    
    function edit($id){
        $data['title']="Edit data Subject";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('kode');
            $info=array(
                'nama_subject'=>$this->input->post('subject'),
            );
            $this->m_subject->update($kode,$info);
            
            $data['subject']=$this->m_subject->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('subject/edit',$data);
        }else{
            $data['message']="";
            $data['subject']=$this->m_subject->cek($id)->row_array();
            $this->template->display('subject/edit',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_subject->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_subject->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencairan";
        $cari=$this->input->post('cari');
        $cek=$this->m_subject->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['subject']=$cek->result();
            $this->template->display('subject/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['subject']=$cek->result();
            $this->template->display('subject/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('subject','Nama Subject','required');
    }
}