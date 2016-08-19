<?php
class Buku extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_buku');
        $this->load->model('m_jenis');
        $this->load->model('m_subject');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='kode_buku',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='kode_buku';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['buku']=$this->m_buku->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Buku";
        
        $config['base_url']=site_url('anggota/index/');
        $config['total_rows']=$this->m_buku->jumlah();
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
            $this->template->display('buku/index',$data);
    }
    
    
    function tambah($offset=0,$order_jenis='id_jenis',$order_subject='id_subject',$order_type='asc'){
        $data['title']="Tambah Buku";
        $data['jenis']=$this->m_jenis->semua($this->limit,$offset,$order_jenis,$order_type)->result();
        $data['subject']=$this->m_subject->semua($this->limit,$offset,$order_subject,$order_type)->result();
        
        

        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
            $kode=$this->input->post('kode'); // mendapatkan input dari kode
            $cek=$this->m_buku->cek($kode); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="<div class='alert alert-danger'>Kode Buku sudah ada</div>";
                $this->template->display('buku/tambah',$data);
            }else{ // jika kode buku belum ada, maka simpan
                
                //setting konfiguras upload image
                $this->load->library('zend');
                $this->zend->load('Zend/Barcode');
                $file=Zend_Barcode::draw('code128', 'image', array('text'=>$this->input->post('kode')), array());
                $code = time().$this->input->post('kode');
                //$barcode = file_get_contents($file);
                imagepng($file, './assets/img/'.$code.'.png');
               // file_put_contents('./assets/img/'.$code.'.png', $Barcode);
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
                    'kode_buku'=>$this->input->post('kode'),
                    'judul'=>$this->input->post('judul'),
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'ebook'=>$ebook,
                    'image'=>$gambar,
                    'lokasi'=>$this->input->post('lokasi'),
                    'stock'=>$this->input->post('stock'),
                    'barcode'=>$code.'.png',
                    'kodepanggil'=>$this->input->post('kodepanggil'),
                    'isbn'=>$this->input->post('isbn'),
                    'id_subject'=>$this->input->post('subject'),
                    'id_jenis'=>$this->input->post('jenis'),
                    'penerbit'=>$this->input->post('penerbit'),
                    'thn_terbit'=>$this->input->post('thn_terbit'),
                    'tmpt_terbit'=>$this->input->post('tmpt_terbit'),
                    'pengarang2'=>$this->input->post('pengarang2'),
                    'pengarang3'=>$this->input->post('pengarang3'),
                    'publish'=>$this->input->post('publish')
                );
                $this->m_buku->simpan($info);
                redirect('buku/index/add_success');

            }
        }else{
            $data['message']="";
            $this->template->display('buku/tambah',$data);
        }
    }
    
    function edit($id,$offset=0,$order_jenis='id_jenis',$order_subject='id_subject',$order_type='asc'){
        $data['title']="Edit data Buku";
        $data['jenis']=$this->m_jenis->semua($this->limit,$offset,$order_jenis,$order_type)->result();
        $data['subject']=$this->m_subject->semua($this->limit,$offset,$order_subject,$order_type)->result();
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

            if(!$this->upload->do_upload('ebook')){
                $ebook="";
            }else{
                $ebook=$this->upload->file_name;
            }
            if($gambar == ""){
                $info=array(
                    'judul'=>$this->input->post('judul'),
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'lokasi'=>$this->input->post('lokasi'),
                        'stock'=>$this->input->post('stock'),
                        'kodepanggil'=>$this->input->post('kodepanggil'),
                        'isbn'=>$this->input->post('isbn'),
                        'id_subject'=>$this->input->post('subject'),
                        'id_jenis'=>$this->input->post('jenis'),
                        'penerbit'=>$this->input->post('penerbit'),
                        'thn_terbit'=>$this->input->post('thn_terbit'),
                        'tmpt_terbit'=>$this->input->post('tmpt_terbit'),
                        'pengarang2'=>$this->input->post('pengarang2'),
                        'pengarang3'=>$this->input->post('pengarang3'),
                        'publish'=>$this->input->post('publish')
                );
            } else {
                $info=array(
                    'judul'=>$this->input->post('judul'),
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'image'=>$gambar,
                    'lokasi'=>$this->input->post('lokasi'),
                    'ebook'=>$ebook,
                        'stock'=>$this->input->post('stock'),
                        'kodepanggil'=>$this->input->post('kodepanggil'),
                        'isbn'=>$this->input->post('isbn'),
                        'id_subject'=>$this->input->post('subject'),
                        'id_jenis'=>$this->input->post('jenis'),
                        'penerbit'=>$this->input->post('penerbit'),
                        'thn_terbit'=>$this->input->post('thn_terbit'),
                        'tmpt_terbit'=>$this->input->post('tmpt_terbit'),
                        'pengarang2'=>$this->input->post('pengarang2'),
                        'pengarang3'=>$this->input->post('pengarang3'),
                        'publish'=>$this->input->post('publish')
                );
            }
            $this->m_buku->update($kode,$info);
            
            $data['buku']=$this->m_buku->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('buku/edit',$data);
        }else{
            $data['message']="";
            $data['buku']=$this->m_buku->cek($id)->row_array();
            $this->template->display('buku/edit',$data);
        }
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
        $this->form_validation->set_rules('kode','Kode Buku','required|max_length[100]');
        $this->form_validation->set_rules('judul','Judul Buku','required|max_length[100]'); 
    }
}