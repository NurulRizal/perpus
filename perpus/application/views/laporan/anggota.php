<div id="page-content">
<legend><?php echo $title;?></legend>
<table class="table table-striped">
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
</table>
</div>