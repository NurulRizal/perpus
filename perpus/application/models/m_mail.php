<?php
class M_mail extends CI_Model{
    private $table="email";
    private $primary="id_email";
    
    function semuaIn($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        $this->db->like('in_out', '0');
        $this->db->from('email');
        return $this->db->get();
    }

    function semuaOut($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        $this->db->like('in_out', '1');
        $this->db->from('email');
        return $this->db->get();
    }

    function semuaFront(){
        $this->db->where('publish = 1');
        $query=$this->db->get($this->table);
        
        return $query;
    }
    
    function jumlahIn(){
        $this->db->like('in_out', '0');
        $this->db->like('status', '0');
        $this->db->from('email');
        $query = $this->db->count_all_results();
        return $query;
    }

    function jumlahOut(){
        $this->db->like('in_out', '1');
        $this->db->from('email');
        $query = $this->db->count_all_results();
        return $query;
    }
    
    function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
        return $query;
    }

    function detail($kode){
        $this->db->select('*');
        $this->db->where($this->primary,$kode);
        $query=$this->db->get();
        
        return $query;
    }
    
    function simpan($jenis){
        $this->db->insert($this->table,$jenis);
        return $this->db->insert_id();
    }
    
    function update($kode,$jenis){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$jenis);
    }
    
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }
    
    function cari($cari){
        $this->db->like($this->primary,$cari);
        $this->db->or_like("judul",$cari);
        return $this->db->get($this->table);
    }

    function validation($kode, $nama)
    {
        $this->db->where("kode_buku ='".$kode."' or judul = '".$nama."'");
        $query=$this->db->get($this->table);
        
        return $query;
    }
}