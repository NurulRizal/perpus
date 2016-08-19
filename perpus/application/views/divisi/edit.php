<!-- Page content -->
                <div id="page-content">
                    <!-- Forms General Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-notes_2"></i><?php echo $title;?><br><br>
                                
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Forms</li>
                        <li><a href="">General</a></li>
                    </ul>
                    <!-- END Forms General Header -->
<?php echo validation_errors();?>
                                <?php echo $message;?>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Basic Form Elements Block -->
                            <div class="block">
                                
                                <form  action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                    
                                            <input type="hidden" id="example-text-input" name="kode" class="form-control" placeholder="Kode Buku" value="<?php echo $divisi['id_divisi'];?>" readonly="readonly">
                                   <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Nama divisi</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="subject" class="form-control" placeholder="Nama Divisi" value="<?php echo $divisi['nama_divisi'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Basic Form Elements Content -->
                            </div>
                            <!-- END Basic Form Elements Block -->
                        </div>
                        
                 </div>

                <!-- Footer -->
                <footer class="clearfix">
                    
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri
                    </div>
                </footer>
                <!-- END Footer -->



<script src="js/pages/formsGeneral.js"></script>
        <script>$(function(){ FormsGeneral.init(); });</script>

