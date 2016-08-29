<?php
class Email extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload','email'));
        $this->load->model('m_mail');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='id_email',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_email';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['buku']=$this->m_mail->semuaIn($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Email";
        
       $data['total_rows']=$this->m_mail->jumlahIn();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('mail/index',$data);
    }

    function out($offset=0,$order_column='id_email',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_email';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['buku']=$this->m_mail->semuaOut($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Email";
        
       $data['total_rows']=$this->m_mail->jumlahOut();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('mail/out',$data);
    }
    
    
    function tambah($offset=0,$order_type='asc',$xorder_column='id_email'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_email';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['buku']=$this->m_mail->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Buat Email";
        
        $data['total_rows']=$this->m_mail->jumlahIn();
        
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
            
                $info=array(
                    'ke'=>$this->input->post('compose-to'),
                    'cc'=>$this->input->post('compose-to-cc'),
                    'bcc'=>$this->input->post('compose-to-bcc'),
                    'subject'=>$this->input->post('compose-subject'),
                    'body'=>$this->input->post('klasifikasi'),
                    'status'=>'0',
                    'in_out'=>'0'
                );
                $this->m_mail->simpan($info);
                redirect('email/index/add_success');
        }else{
            $data['message']="";
            $this->template->display('mail/tambah',$data);
        }
    }
    
    function edit($id,$offset=0,$order_jenis='id_jenis',$order_subject='id_subject',$order_type='asc'){
        $data['title']="Edit data Buku";
        $data['total_rows']=$this->m_mail->jumlahIn();
        
                $info=array(
                    'status'=>'1'
                );
          
            $this->m_mail->update($id,$info);
            
            $data['message']="";
            $data['buku']=$this->m_mail->cek($id)->row_array();
            $this->template->display('mail/edit',$data);
        
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_buku->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_buku->hapus($kode);
    }
    
    function printBarcode($kode){
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
    }

    function cari(){
        $data['title']="Pencairan";
        $cari=$this->input->post('cari');
        $cek=$this->m_buku->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['buku']=$cek->result();
            $this->template->display('buku/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['buku']=$cek->result();
            $this->template->display('buku/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('compose-to','To','required|max_length[100]'); 
    }
}