<table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>No. Peminjaman</td>
            <td>Tanggal Pengembalian</td>
            <td>Denda</td>
        </tr>
    </thead>
    <?php $no=0; foreach($lap as $row): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->id_transaksi;?></td>
        <td><?php echo $row->tgl_pengembalian;?></td>
        <td><?php echo $row->nominal;?></td>
    </tr>
    <?php endforeach;?>
</table>