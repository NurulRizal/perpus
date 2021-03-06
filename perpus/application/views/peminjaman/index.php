<script>
    $(function(){
        
        function loadData(args) {
            //code
            $("#tampil").load("<?php echo site_url('peminjaman/tampil');?>");
        }
        loadData();
        
        function kosong(args) {
            //code
            $("#kode").val('');
            $("#judul").val('');
            $("#pengarang").val('');
        }
        
        $("#nis").click(function(){
            var nis=$("#nis").val();
            
            $.ajax({
                url:"<?php echo site_url('peminjaman/cariAnggota');?>",
                type:"POST",
                data:"nis="+nis,
                cache:false,
                success:function(html){
                    $("#nama").val(html);
                }
            })
        })
        
        $("#kode").keypress(function(){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            
            if(keycode == '13'){
                var kode=$("#kode").val();
            
                $.ajax({
                    url:"<?php echo site_url('peminjaman/cariBuku');?>",
                    type:"POST",
                    data:"kode="+kode,
                    cache:false,
                    success:function(msg){
                        data=msg.split("|");
                        if (data==0) {
                            alert("data tidak ditemukan");
                            $("#judul").val('');
                            $("#pengarang").val('');
                        }else{
                            $("#judul").val(data[0]);
                            $("#pengarang").val(data[1]);
                            $("#tambah").focus();
                        }
                    }
                })
            }
        })
        
        $("#tambah").click(function(){
            var kode=$("#kode").val();
            var judul=$("#judul").val();
            var pengarang=$("#pengarang").val();
            
            if (kode=="") {
                //code
                alert("Kode Buku Masih Kosong");
                return false;
            }else if (judul=="") {
                //code
                alert("Data tidak ditemukan");
                return false
            }else{
                $.ajax({
                    url:"<?php echo site_url('peminjaman/tambah');?>",
                    type:"POST",
                    data:"kode="+kode+"&judul="+judul+"&pengarang="+pengarang,
                    cache:false,
                    success:function(html){
                        loadData();
                        kosong();
                    }
                })    
            }
            
        })
        
        
        $("#simpan").click(function(){
            var nomer=$("#no").val();
            var pinjam=$("#pinjam").val();
            var kembali=$("#kembali").val();
            var nis=$("#nis").val();
            var jumlah=parseInt($("#jumlahTmp").val(),10);
            
            if (nis=="") {
                alert("Pilih NIP Anggota");
                return false;
            }else if (jumlah==0) {
                alert("pilih buku yang akan dipinjam");
                return false;
            }else{
                $.ajax({
                    url:"<?php echo site_url('peminjaman/sukses');?>",
                    type:"POST",
                    data:"nomer="+nomer+"&pinjam="+pinjam+"&kembali="+kembali+"&nis="+nis+"&jumlah="+jumlah,
                    cache:false,
                    success:function(html){
                        alert("Transaksi Peminjaman berhasil");
                        location.reload();
                    }
                })
            }
            
        })
        
        $(".hapus").live("click",function(){
            var kode=$(this).attr("kode");
            
            $.ajax({
                url:"<?php echo site_url('peminjaman/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    loadData();
                }
            });
        });
        
        $("#cari").click(function(){
            $("#myModal2").modal("show");
        })
        
        $("#caribuku").keyup(function(){
            var caribuku=$("#caribuku").val();
            
            $.ajax({
                url:"<?php echo site_url('peminjaman/pencarianbuku');?>",
                type:"POST",
                data:"caribuku="+caribuku,
                cache:false,
                success:function(html){
                    $("#tampilbuku").html(html);
                }
            })
        })
        
        $(".tambah").live("click",function(){
            var kode=$(this).attr("kode");
            var judul=$(this).attr("judul");
            var pengarang=$(this).attr("pengarang");
            
            $("#kode").val(kode);
            $("#judul").val(judul);
            $("#pengarang").val(pengarang);
            
            $("#myModal2").modal("hide");
        })
        
    })
</script>
<div id="page-content">
<legend><?php echo $title;?></legend>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" action="<?php echo site_url('peminjaman/simpan');?>" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-lg-4 control-label">No. Peminjaman</label>
                    <div class="col-lg-7">
                        <input type="text" id="no" name="no" class="form-control" value="<?php echo $noauto;?>" readonly="readonly">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label">Tgl Pinjam</label>
                    <div class="col-lg-7">
                        <input type="text" id="pinjam" name="pinjam" class="form-control" value="<?php echo $tanggalpinjam;?>" readonly="readonly">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label">Tgl Kembali</label>
                    <div class="col-lg-7">
                        <input type="text" id="kembali" name="kembali" class="form-control" value="<?php echo $tanggalkembali;?>" readonly="readonly">
                    </div>
                </div>
            </div>
           
            <div class="col-md-6">
             <?php if ($this->session->userdata('status') == 'Staff' || $this->session->userdata('status') == 'Admin'){?>
                <div class="form-group">
                    <label class="col-lg-4 control-label">NIP/No KTP/No SIM</label>
                    <div class="col-lg-7">
                        <select name="nis" class="form-control" id="nis">
                            <option></option>
                            <?php foreach($anggota as $anggota):?>
                            <option value="<?php echo $anggota->nis;?>"><?php echo $anggota->nis;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Anggota</label>
                    <div class="col-lg-7">
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                </div>
                <?php } else {?>
                        <label class="col-lg-4 control-label">Nama Anggota</label>
                        <div class="col-lg-7">
                        <input type="text" id="kembali" name="" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" readonly="readonly">
                        <input type="hidden" id="kembali" name="nis" class="form-control" value="<?php echo $this->session->userdata('id_karyawan'); ?>" readonly="readonly">
                        </div>
                <?php }?>
                
            </div>
        </form>
    </div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">
        Data Koleksi
    </div>
    
    <div class="panel-body">
        <div class="form-inline">
            <div class="form-group">
                <label>Kode Koleksi</label>
                <input type="text" class="form-control" placeholder="Kode Koleksi" id="kode">
            </div>
            <div class="form-group">
                <label class="sr-only">Judul Koleksi</label>
                <input type="text" class="form-control" placeholder="Judul Koleksi" id="judul" readonly="readonly">
            </div>
            <div class="form-group">
                <label class="sr-only">Pengarang</label>
                <input type="text" class="form-control" placeholder="Pengarang" id="pengarang" readonly="readonly">
            </div>
            <div class="form-group">
                <label class="sr-only">Pengarang</label>
                <button id="tambah" class="btn btn-primary"><i class="fa fa-plus"></i></button>
            </div>
            <div class="form-group">
                <label class="sr-only">Pengarang</label>
                <button id="cari" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    
    <div id="tampil"></div>
    
    <div class="panel-footer">
        <button id="simpan" class="btn btn-primary"><i class="fa fa-hdd"></i> Simpan</button>
    </div>
</div>




 <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Peminjaman</h4>
                  </div>
                  <div class="modal-body">
                        <div class="form-horizontal">
                            <label class="col-lg-3 control-label">Cari Koleksi</label>
                            <div class="col-lg-5">
                                <input type="text" name="caribuku" id="caribuku" class="form-control">
                            </div>
                        </div>
                        
                        <div id="tampilbuku"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
</div>