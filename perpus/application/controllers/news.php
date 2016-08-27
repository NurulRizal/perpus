<?php
class News extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_news');
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='id_news',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id_news';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['news']=$this->m_news->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data News";
        
        $config['base_url']=site_url('anggota/index/');
        $config['total_rows']=$this->m_news->jumlah();
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
            $this->template->display('news/index',$data);
    }
    
    
    function tambah($offset=0,$order_jenis='id_jenis',$order_subject='id_subject',$order_type='asc'){
        $data['title']="Tambah news";
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
                $config['upload_path'] = './assets/img/';
        		$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        		$config['max_size']	= '5000';
        		$config['max_width']  = '2000';
        		$config['max_height']  = '1024';
                        
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                
                if(!$this->upload->do_upload('ebook')){
                    $ebook="";
                }else{
                    $ebook=$this->upload->file_name;
                }

                $info=array(
                    'title'=>$this->input->post('judul'),
                    'body'=>$this->input->post('body'),
                    'image'=>$gambar,
                    'publish'=>$this->input->post('publish')
                );
                $this->m_news->simpan($info);
                redirect('news/index/add_success');
        }else{
            $data['message']="";
            $this->template->display('news/tambah',$data);
        }
    }
    
    function edit($id,$offset=0,$order_jenis='id_jenis',$order_subject='id_subject',$order_type='asc'){
        $data['title']="Edit data news";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('kode');
            
            //setting konfiguras upload image
            $config['upload_path'] = './assets/img/';
	    $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $config['max_size']	= '1000';
	    $config['max_width']  = '2000';
	    $config['max_height']  = '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }

            if($gambar == ""){
                $info=array(
                    'title'=>$this->input->post('judul'),
                    'body'=>$this->input->post('body'),
                    'publish'=>$this->input->post('publish')
                );
            } else {
                $info=array(
                    'title'=>$this->input->post('judul'),
                    'body'=>$this->input->post('body'),
                    'image'=>$gambar,
                    'publish'=>$this->input->post('publish')
                );
            }
            $this->m_news->update($kode,$info);
            
            $data['news']=$this->m_news->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('news/edit',$data);
        }else{
            $data['message']="";
            $data['news']=$this->m_news->cek($id)->row_array();
            $this->template->display('news/edit',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_news->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_news->hapus($kode);
    }
    
    function printBarcode($kode){
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
    }

    function cari(){
        $data['title']="Pencairan";
        $cari=$this->input->post('cari');
        $cek=$this->m_news->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['news']=$cek->result();
            $this->template->display('news/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['news']=$cek->result();
            $this->template->display('news/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('judul','Judul news','required|max_length[100]'); 
    }
}