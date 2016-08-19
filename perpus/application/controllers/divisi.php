<?php
class Divisi extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_divisi');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='id_divisi',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_subject';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['divisi']=$this->m_divisi->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Divisi";
        
        $config['base_url']=site_url('divisi/index/');
        $config['total_rows']=$this->m_divisi->jumlah();
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
            $this->template->display('divisi/index',$data);
    }
    
    
    function tambah(){
        $data['title']="Tambah Divisi";
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
            if($this->m_divisi->validation($this->input->post('subject'))->num_rows == 0){
                $info=array(
                    'nama_divisi'=>$this->input->post('subject'),
                    
                );
                $this->m_divisi->simpan($info);
                redirect('divisi/index/add_success', $info);
            } else {
                $data['message']="<div class='alert alert-danger'>Nama Divisi sudah ada</div>";
                $this->template->display('divisi/tambah',$data);
            }

            
        }else{
            $data['message']="";
            $this->template->display('divisi/tambah',$data);
        }
    }
    
    function edit($id){
        $data['title']="Edit data divisi";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('kode');
            $info=array(
                'nama_divisi'=>$this->input->post('subject'),
            );
            $this->m_divisi->update($kode,$info);
            
            $data['divisi']=$this->m_divisi->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('divisi/edit',$data);
        }else{
            $data['message']="";
            $data['divisi']=$this->m_divisi->cek($id)->row_array();
            $this->template->display('divisi/edit',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_subject->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_divisi->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencairan";
        $cari=$this->input->post('cari');
        $cek=$this->m_divisi->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['divisi']=$cek->result();
            $this->template->display('divisi/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['divisi']=$cek->result();
            $this->template->display('divisi/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('subject','Nama Divisi','required');
    }
}