<?php
class Pengembalian extends CI_Controller{
    #code
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation'));
        $this->load->model('m_pengembalian');
        $this->load->model('m_buku');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
        $data['title']="Pengembalian Buku";
        $data['tanggal']=date('Y-m-d');
        $this->template->display('pengembalian/index',$data);
    }
    
    function cariTransaksi(){
        $no=$this->input->post('no');
        $transaksi=$this->m_pengembalian->cariTransaksi($no);
        if($transaksi->num_rows()>0){
            $transaksi=$transaksi->row_array();
            echo $transaksi['nis']."|".$transaksi['tanggal_pinjam']."|".$transaksi['tanggal_kembali']."|".$transaksi['nama']."|".$transaksi['kode_buku'];
        }
        
        
    }
    
    function tampil(){
        $no=$_GET['no'];
        $data['buku']=$this->m_pengembalian->tampilBuku($no)->result();
        $transaksi=$this->m_pengembalian->cariTransaksi($no)->row_array();
        
        $this->load->view('pengembalian/tampilbuku',$data);
    }
    
    function simpan(){
        $info=array(
            'id_transaksi'=>$this->input->post('no'),
            'tgl_pengembalian'=>date('Y-m-d'),
            'denda'=>$this->input->post('denda'),
            'nominal'=>$this->input->post('nominal')
        );
        $this->m_pengembalian->simpan($info);
        
        $data=$this->m_buku->cek($this->input->post('id'));
            $infox=array(
                    'stock'=>$data->row()->stock+1,
                );
        $this->m_buku->update($data->row()->kode_buku,$infox);
            
        $no=$this->input->post('no');
        $update=array(
            'status'=>"Y"
        );
        $this->m_pengembalian->update($no,$update);
        
        $this->m_pengembalian->simpan($info);
    }
    
    function cari_by_nis(){
        $nis=$this->input->post('nis');
        $data['pencarian']=$this->m_pengembalian->cari_by_nis($nis)->result();
        $this->load->view('pengembalian/pencarian',$data);
    }
    
}
