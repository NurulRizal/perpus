<div id="page-content">
    <div class="block full">
        <div class="table-responsive">
        <legend><?php echo $title;?></legend>
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Kode Koleksi</td>
                        <td>ISBN</td>
                        <td>Judul</td>
                        <td>Pengarang</td>
                        <td>Klasifikasi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; foreach($buku as $row): $no++;?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row->kode_buku;?></td>
                        <td><?php echo $row->isbn;?></td>
                        <td><?php echo $row->judul;?></td>
                        <td><?php echo $row->pengarang;?></td>
                        <td><?php echo substr($row->klasifikasi, 3, 20);?>...</td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>