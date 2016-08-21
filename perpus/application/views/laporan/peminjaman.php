<script>
    $(function(){
        $("#tampilkantombol").click(function(){
            var tanggal1=$("#tanggal1").val();
            var tanggal2=$("#tanggal2").val();
            
            $.ajax({
                url:"<?php echo site_url('laporan/cari_pinjaman');?>",
                type:"POST",
                data:"tanggal1="+tanggal1+"&tanggal2="+tanggal2,
                cache:false,
                success:function(html){
                    $("#tampillaporan").html(html);
                }
            })
        })
    })
    function tanggal()
    {
        var x = document.getElementById("tanggal1").value;
        var y = document.getElementById("tanggal2").value;
        console.log(x);
        document.getElementById("tanggal3").value = x;
        document.getElementById("tanggal4").value = y;
    }
</script>
<div id="page-content">
<legend><?php echo $title;?></legend>

<div class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-3">Tanggal Awal</label>
        <div class="col-lg-5">
            <input type="text" id="tanggal1" class="form-control"  onchange="tanggal()">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3">Tanggal Selesai</label>
        <div class="col-lg-5">
            <input type="text" id="tanggal2" class="form-control" onchange="tanggal()">
        </div>
        
        <div class="col-lg-4">
            <button id="tampilkantombol" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Tampilkan</button>
        </div>
    </div>
</div>

<div id="tampillaporan"></div>
<form action="<?php echo site_url('laporan/cetakPinjam');?>" method=POST>
            <input type="hidden" id="tanggal3" name="tanggal3" class="form-control">
            <input type="hidden" id="tanggal4" name="tanggal4" class="form-control">
        <div class="col-lg-4">
            <button type="submit" class="btn btn-primary" name="tombol" value="excel"><i class="fa fa-file-excel-o"></i> Download Excel</button>
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-primary" name="tombol" value="pdf"><i class="fa fa-file-pdf-o"></i> Download PDF</button>
        </div>
</div>
</form>