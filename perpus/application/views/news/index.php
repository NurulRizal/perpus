<div id="page-content">
                   <a href="<?php echo site_url('news/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Berita</a>
                        <hr>
                        <?php echo $message;?>
                    <!-- Datatables Content -->
                    <div class="block full">
                         <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Gambar</td>
                                        <td>Judul</td>
                                        <td>Isi</td>
                                        <td>Terbitkan</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($news as $row ): $no++;?>
                                    <tr>
                                       <td><?php echo $no;?></td>
                                        <td><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></td>
                                        <td><?php echo $row->title;?></td>
                                        <td><?php echo substr($row->body, 3, 20);?>...</td>
                                        <td><?php if($row->publish == 1){echo 'Publish';} else {echo 'Unpublish';}?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('news/edit/'.$row->id_news);?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger hapus" kode="<?php echo $row->id_news;?>"><i class="fa fa-times"></i> </a><!--a href="<?php echo site_url('news/printBarcode/'.$row->kode_news);?>" data-toggle="tooltip" title="Print Barcode" class="btn btn-xs btn-success" ><i class="fa fa-print"></i> </a -->
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
                url:"<?php echo site_url('news/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('news/index/delete_success');?>";
                }
            });
        });
    });
</script>
