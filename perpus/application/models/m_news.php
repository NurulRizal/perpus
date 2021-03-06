<?php
class M_news extends CI_Model{
    private $table="news";
    private $primary="id_news";
    
    function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
    }

    function semuaFront(){
        $this->db->where('publish = 1');
        $query=$this->db->get($this->table);
        
        return $query;
    }
    
    function jumlah(){
        return $this->db->count_all($this->table);
    }
    
    function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
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
        $this->db->where("id_news ='".$kode);
        $query=$this->db->get($this->table);
        
        return $query;
    }

    function detail($kode){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->primary,$kode);
        $query=$this->db->get();
        
        return $query;
    }
}