<table class="table table-striped">
    <thead>
        <tr>
            <td>Kode Koleksi</td>
            <td>Judul Koleksi</td>
            <td>Pengarang</td>
        </tr>
    </thead>
    <?php foreach($buku as $row):?>
    <tr>
        <td><?php echo $row->kode_buku;?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->pengarang;?></td>
    </tr>
    <?php endforeach;?>
</table>