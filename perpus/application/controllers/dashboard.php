<?php
class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->library(array('template','form_validation','pagination','upload'));
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
        $data['title']="Home";
        
        $this->template->display('dashboard/index',$data);
    }
    
    function petugas(){
        $data['title']="Data Petugas";
        $data['petugas']=$this->m_petugas->semua()->result();
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        $this->template->display('dashboard/petugas',$data);
    }
    
    function tambahpetugas(){
        $data['title']="Tambah Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user=$this->input->post('user');
            $cek=$this->m_petugas->cekKode($user);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
                $this->template->display('dashboard/tambahpetugas',$data);
            }else{
                $config['upload_path'] = './assets/img/anggota/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
                $info=array(
                    'user'=>$this->input->post('user'),
                    'password'=>md5($this->input->post('password')),
                    'kode_staff'=>$this->input->post('staff'),
                    'email'=>$this->input->post('email'),
                    'tlp'=>$this->input->post('tlp'),
                    'role'=>$this->input->post('role'),
                'gambar'=>$gambar
                );
                $this->m_petugas->simpan($info);
                redirect('dashboard/petugas/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('dashboard/tambahpetugas',$data);
        }
    }
    
    function edit($id){
        $data['title']="Update data Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id');
            if($this->input->post('password') == ''){
                $config['upload_path'] = './assets/img/anggota/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
                $info=array(
                'user'=>$this->input->post('user'),
                    'kode_staff'=>$this->input->post('staff'),
                    'email'=>$this->input->post('email'),
                    'tlp'=>$this->input->post('tlp'),
                    'role'=>$this->input->post('role'),
                'gambar'=>$gambar
            );
            } else {
                $config['upload_path'] = './assets/img/anggota/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
                $info=array(
                'user'=>$this->input->post('user'),
                    'password'=>md5($this->input->post('password')),
                    'kode_staff'=>$this->input->post('staff'),
                    'email'=>$this->input->post('email'),
                    'tlp'=>$this->input->post('tlp'),
                    'role'=>$this->input->post('role'),
                'gambar'=>$gambar
            );    
            }
            
            $this->m_petugas->update($id,$info);
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            $this->template->display('dashboard/editpetugas',$data);
        }else{
            $data['message']="";
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $this->template->display('dashboard/editpetugas',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_petugas->hapus($kode);
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('user','username','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
    
    function logout(){
        $this->session->unset_userdata('username');
        redirect('web');
    }
}