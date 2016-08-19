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
        
            <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/themes.css');?>" rel="stylesheet">
        
            
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
            <!-- END Main Sidebar -->
            <div id="main">
            <!-- custom -->

<header class="navbar navbar-default">
                    
                    </header>
                <!-- END Header -->


<!-- Page content -->
<div id="page-content">
    <!-- Gallery Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-picture-o"></i>Gallery<br><small>Create the gallery you want!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Gallery</a></li>
    </ul>
    <!-- END Gallery Header -->

    <!-- Lightbox functionality is based on Magnific Popup plugin (initialized in js/app.js -> uiInit()) -->

    <!-- Single Image Block -->
    <div class="block">
        <!-- Single Image Title -->
        <div class="block-title">
            <h2><strong>Single</strong> Image</h2>
        </div>
          <div class="row">
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image</h4>
                <img src="img/placeholders/photos/photo3.jpg" class="img-responsive" alt="image">
            </div>
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image with Lightbox</h4>
                <!-- Just wrap your image with a link to your large image and the attribute data-toggle="lightbox-image" -->
                <a href="img/placeholders/photos/photo5.jpg" data-toggle="lightbox-image">
                    <img src="img/placeholders/photos/photo5.jpg" alt="image">
                </a>
            </div>
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image with Options</h4>
                <!-- Just wrap your image with a div.gallery-image and.. -->
                <div class="gallery-image">
                    <!-- .. add your image.. -->
                    <img src="img/placeholders/photos/photo9.jpg" alt="image">
                    <!-- .. along with a div.gallery-image-options which will contain your hover links! -->
                    <div class="gallery-image-options">
                        <!-- Link to your large image with the attribute data-toggle="lightbox-image" -->
                        <a href="img/placeholders/photos/photo9.jpg" data-toggle="lightbox-image" title="This is some info text about the image" class="gallery-link btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-primary" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Single Image Content -->
    </div>
    </div>
<!-- END Page Content -->

        <!-- Footer -->
        <footer class="clearfix">
            <div class="pull-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
            </div>
            <div class="pull-left">
                <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 2.1</a>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Main Container -->
</div>
 </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
     
        
        
        </body>
        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
        <script src="<?php echo base_url('assets/js/app.js');?>"></script>
         <!-- Load and execute javascript code used only in this page -->
        
        <script src="<?php echo base_url('assets/js/pages/tablesDatatables.js');?>"></script>
        
    </html>