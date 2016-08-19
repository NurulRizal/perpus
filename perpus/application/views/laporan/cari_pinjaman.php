<table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>No. Peminjaman</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
            <td>NIP/No KTP/No SIM</td>
        </tr>
    </thead>
    <?php $no=0; foreach($lap as $row): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><a href="<?php echo site_url('laporan/detail_pinjam/'.$row->id_transaksi);?>"><?php echo $row->id_transaksi;?></a></td>
        <td><?php echo $row->tanggal_pinjam;?></td>
        <td><?php echo $row->tanggal_kembali;?></td>
        <td><?php echo $row->nis;?></td>
    </tr>
    <?php endforeach;?>
</table>