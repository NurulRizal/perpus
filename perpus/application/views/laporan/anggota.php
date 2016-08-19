<div id="page-content">
    <div class="block full">
        <div class="table-responsive">
        <legend><?php echo $title;?></legend>
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>NIP/No KTP/No SIM</td>
                        <td>Nama</td>
            			<td>Email</td>
            			<td>No. Telp</td>
            			<td>Jenis Keanggotaan</td>
                    </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach($anggota as $row): $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row->nis;?></td>
                    <td><?php echo $row->nama;?></td>
            		<td><?php echo $row->email;?></td>
            		<td><?php echo $row->phone;?></td>
            		<td><?php echo $row->status;?></td>
            		
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>