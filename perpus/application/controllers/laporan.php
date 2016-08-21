<?php class Laporan extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
        $this->load->model('m_laporan');
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function anggota(){
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_laporan->semuaAnggota()->result();
        $this->template->display('laporan/anggota',$data);
    }
    
    function buku(){
        $data['title']="Data Buku";
        $data['buku']=$this->m_laporan->semuaBuku()->result();
        $this->template->display('laporan/buku',$data);
    }
    
    function peminjaman(){
        $data['title']="Laporan Peminjaman";
        $this->template->display('laporan/peminjaman',$data);
    }
    
    function cari_pinjaman(){
        $data['title']="Detail Peminjaman";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpeminjaman($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cari_pinjaman',$data);
    }
    
    function detail_pinjam($id){
        $data['title']=$id;
        $data['pinjam']=$this->m_laporan->detail_pinjam($id)->row_array();
        $data['detail']=$this->m_laporan->detail_pinjam($id)->result();
        $this->template->display('laporan/detail_pinjam',$data);
    }
    
    function pengembalian(){
        $data['title']="Data Pengembalian";
        $this->template->display('laporan/pengembalian',$data);
    }
    
    function cari_pengembalian(){
        $data['title']="Detail Pengembalian";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpengembalian($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cari_pengembalian',$data);
    }

    function cetakPinjam()
    {
        $tanggal1=$this->input->post('tanggal3');
        $tanggal2=$this->input->post('tanggal4');
        $data = $this->m_laporan->detailpeminjaman($tanggal1,$tanggal2)->result();
        if($this->input->post('tombol') == 'excel'){
            $objPHPExcel = new PHPExcel();
            $objset = $objPHPExcel->setActiveSheetIndex(0); //inisiasi set object
            $objget = $objPHPExcel->getActiveSheet();  //inisiasi get object
 
            $objget->setTitle('Laporan Peminjaman'); //sheet title

            //table header
            $cols = array("A","B","C","D","E","F");
             
            $val = array("No","No. Peminjam","Tanggal Pinjam","Tanggal Kembali","NIP/No KTP/No SIM","Nama");

            for ($a=0;$a<6; $a++) 
            {
                $objset->setCellValue($cols[$a].'1', $val[$a]);
                 
                //Setting lebar cell
                $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // NAMA
                $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // ALAMAT
                $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Kontak
                $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Kontak
                $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25); // Kontak
                $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Kontak
             
                $style = array(
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                    )
                );
                //$objPHPExcel->getActiveSheet()->getStyle($cols[$a].'1')->applyFromArray($style);
            }
            $baris = 2;
            $no=0;
            foreach ($data as $row){
                $no++; 
                //pemanggilan sesuaikan dengan nama kolom tabel
                $objset->setCellValue("A".$baris, $no); //membaca data nama
                $objset->setCellValue("B".$baris, $row->id_transaksi); //membaca data alamat
                $objset->setCellValue("C".$baris, $row->tanggal_pinjam); //membaca data kontak
                $objset->setCellValue("D".$baris, $row->tanggal_kembali); //membaca data kontak
                $objset->setCellValue("E".$baris, $row->nis); //membaca data kontak
                $objset->setCellValue("F".$baris, $row->nama); //membaca data kontak
                 
                //Set number value
                $objPHPExcel->getActiveSheet()->getStyle('C1:C'.$baris)->getNumberFormat()->setFormatCode('0');
                 
                $baris++;
            }

            $objPHPExcel->getActiveSheet()->setTitle('Data Export');
 
            $objPHPExcel->setActiveSheetIndex(0);  
            $filename = urlencode("Data".date("Y-m-d H:i:s").".xls");
               
              header('Content-Type: application/vnd.ms-excel'); //mime type
              header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
              header('Cache-Control: max-age=0'); //no cache
 
            $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');                
            $objWriter->save('php://output');
        } else {
            echo "ea";
        }
    }
}