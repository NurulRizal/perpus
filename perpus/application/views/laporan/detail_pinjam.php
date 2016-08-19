<legend>Detail Peminjaman</legend>
<div class="col-md-6">
    <div class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-5">No. Peminjaman</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['id_transaksi'];?>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-5">Tanggal Pinjam</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['tanggal_pinjam'];?>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-5">NIP/No KTP/No SIM</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['nis'];?>
        </div>
    </div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Kode Koleksi</td>
            <td>Judul</td>
            <td>Pengarang</td>
        </tr>
    </thead>
    <?php foreach($detail as $row):?>
    <tr>
        <td><?php echo $row->kode_buku;?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->pengarang;?></td>
    </tr>
    <?php endforeach;?>
</table>