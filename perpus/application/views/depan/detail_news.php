<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI Frontend - Responsive Bootstrap Site Template</title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon57.png');?>" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon72.png');?>" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon76.png');?>" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon114.png');?>" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon120.png');?>" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon144.png');?>" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon152.png');?>" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link href="<?php echo base_url('assets/cssdepan/bootstrap.min.css');?>" rel="stylesheet">
        

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url('assets/cssdepan/plugins.css');?>">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url('assets/cssdepan/main.css');?>">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url('assets/cssdepan/themes.css');?>">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo base_url('assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js');?>"></script>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="index.html" class="site-logo">
                        <i class="gi gi-flash"></i> <strong>Pro</strong>UI
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            <li class="active">
                                <a href="<?php echo site_url('depan');?>"</i>Home</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Request Koleksi</a>
                            </li>
                            <li>
                                <a href="#">Login</a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="animation-slideDown"><strong><?php echo $buku->title;?></strong></h1>
                </div>
            </section>
            <!-- END Intro -->

            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 site-block">
                            <!-- Story -->
                            <article>
                                <?php echo $buku->body;?>
                            </article>
                            <!-- END Story -->
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Article -->

            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="about.html">Company</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Legal</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="javascript:void(0)">Licensing</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Follow Us</h4>
                            <ul class="footer-nav footer-nav-social list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading"><span id="year-copy">2014</span> &copy; <a href="http://goo.gl/TDOSuC">ProUI Frontend</a></h4>
                            <ul class="footer-nav list-inline">
                                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
        <script src="<?php echo base_url('assets/js/app.js');?>"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url('assets/js/pages/portfolio.js');?>"></script>
        <script>$(function(){ Portfolio.init(); });</script>
    </body>
</html>