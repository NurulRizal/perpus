<!doctype html>
    <html>
        <head>
            <title>Aplikasi Perpustakaan | <?php echo $title;?></title>
            <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon57.png');?>" sizes="57x57">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon72.png');?>" sizes="72x72">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon76.png');?>" sizes="76x76">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon114.png');?>" sizes="114x114">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon120.png');?>" sizes="120x120">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon144.png');?>" sizes="144x144">
            <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon152.png');?>" sizes="152x152">
            <!-- END Icons -->

            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/themes.css');?>" rel="stylesheet">
             
             <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js');?>"></script>

        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
        <script src="<?php echo base_url('assets/js/app.js');?>"></script>
        
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>

         <!-- Load and execute javascript code used only in this page -->
        
        <script src="<?php echo base_url('assets/js/pages/tablesDatatables.js');?>"></script>
        
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
            <script src="<?php echo base_url('assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js');?>"></script>
        </head>
        <body>
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
        <?php echo $_sidebar;?>
        <div id="main-container">
        
            <?php echo $_header;?>
            <?php echo $_content;?>
            <!-- Footer -->
                
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="idhapus" id="idhapus">
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        
        
        </body>
        <!-- Core Scripts - Include with every page -->
        
        <script>$(function(){ TablesDatatables.init(); });</script>   
        



    </html>