<div id="page-content">
                   <a href="<?php echo site_url('dashboard/tambahpetugas');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah Pustakawan</a>
                        <hr>
                        <?php echo $message;?>
                    <!-- Datatables Content -->
                    <div class="block full">
                        
                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Kode Pustakawan</td>
                                        <td>Username</td>
                                        <td>Email</td>
                                        <td>No Telp</td>
                                        <td>Role</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($petugas as $row ): $no++;?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row->kode_staff;?></td>
                                        <td><?php echo $row->user;?></td>
                                        <td><?php echo $row->email;?></td>
                                        <td><?php echo $row->tlp;?></td>
                                        <td><?php echo $row->role;?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo site_url('dashboard/edit/'.$row->id_petugas);?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger hapus" kode="<?php echo $row->id_petugas;?>"><i class="fa fa-times"></i> </a>
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
                        <span id=""></span>2016 BPP Kemendagri
                    </div>
                </footer>


