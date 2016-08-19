<div id="page-content">
                   <a href="<?php echo site_url('subject/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                        <hr>
                        <?php echo $message;?>
                    <!-- Datatables Content -->
                    <div class="block full">
                        
                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td colspan='4'>Nama Subject</td>
                                        <td colspan="2"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($subject as $row ): $no++;?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row->nama_subject;?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('subject/edit/'.$row->id_subject);?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger hapus" kode="<?php echo $row->id_subject;?>"><i class="fa fa-times"></i> </a>
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
                        <span id=""></span> 2016 BPP Kemendagri
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
                url:"<?php echo site_url('subject/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('subject/index/delete_success');?>";
                }
            });
        });
    });
</script>
