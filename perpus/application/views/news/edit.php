<!-- Page content -->
                <div id="page-content">
                    <!-- Forms General Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-notes_2"></i><?php echo "Edit Data Koleksi"?><br><br>
                                
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Forms</li>
                        <li><a href="">Edit Data Koleksi</a></li>
                    </ul>
                    <!-- END Forms General Header -->
<?php echo validation_errors();?>
                                <?php echo $message;?>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Basic Form Elements Block -->
                            <div class="block">
                                
                                <form  action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                            <input type="hidden" id="example-text-input" name="kode" class="form-control" placeholder="Kode news" value="<?php echo $news['id_news'];?>" readonly="readonly">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Judul Berita</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="judul" class="form-control" placeholder="Judul Berita" value="<?php echo $news['title'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Body</label>
                                        <div class="col-md-9">
                                            <textarea id="example-textarea-input" name="body" rows="9" class="form-control" placeholder="Content.."><?php echo $news['body'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Gambar</label>
                                        <div class="col-md-9">
                                            <img src="<?php echo base_url('assets/img/'.$news['image']);?>" height="200px" width="200px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Gambar</label>
                                        <div class="col-md-9">
                                            <input type="file" id="example-text-input" name="gambar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-text-input"></label>
                                    <div class="col-md-9">
                                    <?php if($news['publish'] == 1){?>
                                    <input id="example-checkbox1" name="publish" value="1" type="checkbox" checked> Publish
                                    <?php } else {?>
                                    <input id="example-checkbox1" name="publish" value="1" type="checkbox"> Publish
                                    <?php }?>
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

