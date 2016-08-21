<?php
class M_Laporan extends CI_Model{
    #code
    
    function semuaAnggota(){
        return $this->db->get("anggota");
    }
    
    function semuaBuku(){
        return $this->db->get("buku");
    }
    
    function detailpeminjaman($tanggal1,$tanggal2){
        return $this->db->query("select * from transaksi inner join anggota on transaksi.nis = anggota.nis where tanggal_pinjam between '$tanggal1' and '$tanggal2' group by id_transaksi");
    }
    
    function detail_pinjam($id){
        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->where("id_transaksi",$id);
        $this->db->join("buku","buku.kode_buku=transaksi.kode_buku");
        $this->db->join("anggota","anggota.nis=transaksi.nis");
        return $this->db->get();
    }
    
    function detailpengembalian($tanggal1,$tanggal2){
        return $this->db->query("select * from pengembalian inner join transaksi on transaksi.id_transaksi = pengembalian.id_transaksi inner join anggota on transaksi.nis = anggota.nis where pengembalian.tgl_pengembalian between '$tanggal1' and '$tanggal2' group by id_transaksi");
    }
}
