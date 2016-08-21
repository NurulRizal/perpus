<table class="table table-striped">
    <thead>
        <tr>
            <td>No. Peminjaman</td>
            <td>NIP/No KTP/No SIM</td>
            <td>Tgl. Peminjaman</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach($pencarian as $row):?>
    <tr>
        <td><?php echo $row->id_transaksi;?></td>
        <td><?php echo $row->nis;?></td>
        <td><?php echo $row->tanggal_pinjam;?></td>
        <td><a href="#" class="tambahkan" no="<?php echo $row->id_transaksi;?>">
            <i class="fa fa-plus"></i>
        </a></td>
    </tr>
    <?php endforeach;?>
</table>