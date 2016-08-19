<div id="page-content">
                   <a href="<?php echo site_url('buku/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Koleksi</a>
                        <hr>
                        <?php echo $message;?>
                    <!-- Datatables Content -->
                    <div class="block full">
                         <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Image</td>
                                        <td>Kode Koleksi</td>
                                        <td>Judul</td>
                                        <td>Pengarang</td>
                                        <td>Klasifikasi</td>
                                        <td>Lokasi Rak</td>
                                        <td>Stock Koleksi</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($buku as $row ): $no++;?>
                                    <tr>
                                       <td><?php echo $no;?></td>
                                        <td><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></td>
                                        <td><?php echo $row->kode_buku;?></td>
                                        <td><?php echo $row->judul;?></td>
                                        <td><?php echo $row->pengarang;?></td>
                                        <td><?php echo $row->klasifikasi;?></td>
                                        <td><?php echo $row->lokasi;?></td>
                                        <td><?php echo $row->stock;?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('buku/edit/'.$row->kode_buku);?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger hapus" kode="<?php echo $row->kode_buku;?>"><i class="fa fa-times"></i> </a><!--a href="<?php echo site_url('buku/printBarcode/'.$row->kode_buku);?>" data-toggle="tooltip" title="Print Barcode" class="btn btn-xs btn-success" ><i class="fa fa-print"></i> </a -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach;?> 
                                </tbody>
                            </table>
                       </div>

                        
                       </div>
                       <footer class="clearfix">
                    
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri</a>
                    </div>
                </footer>
<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('buku/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('buku/index/delete_success');?>";
                }
            });
        });
    });
</script>
