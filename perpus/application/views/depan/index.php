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
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Home</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Full Width</a>
                                    </li>
                                    <li>
                                        <a href="index_alt.html">Full Width (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_parallax.html">Full Width Parallax</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_alt.html">Boxed (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_parallax.html">Boxed Parallax</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Pages</a>
                                <ul>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog_post.html">Blog Post</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_4.html">Portfolio 4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_3.html" class="active">Portfolio 3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_2.html">Portfolio 2 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_single.html">Portfolio Single</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="helpdesk.html">Helpdesk</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="features.html">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
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
                    <h1 class="text-center animation-slideDown"><strong>Our Work</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">We will be happy to work together and bring your ideas to life!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Content -->
            <section class="site-content site-section">
                <div class="container">
                    <!-- Portfolio Filter Links -->
                    <!-- Custom Portfolio functionality is initialized in js/pages/portfolio.js -->
                    <!-- Add the category value you want each link in .portfolio-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
                    <div class="site-block text-center">
                        <div class="btn-group portfolio-filter">
                            <a href="javascript:void(0)" class="btn btn-primary active" data-category="all">All</a>
                            <a href="javascript:void(0)" class="btn btn-primary" data-category="design">Design</a>
                            <a href="javascript:void(0)" class="btn btn-primary" data-category="development">Development</a>
                            <a href="javascript:void(0)" class="btn btn-primary" data-category="logo">Logo</a>
                        </div>
                    </div>
                    <!-- END Portfolio Filter Links -->

                    <!-- Portfolio Items -->
                    <!-- Add the category value for each item in its data-category attribute (for the filter functionality) -->
                    <div class="row portfolio">
                    <?php foreach($depan->result() as $row):?>
                        <div class="col-sm-4 portfolio-item animation-fadeInQuick" data-category="design">
                            <a href="portfolio_single.html">
                                <img src="<?php echo base_url('assets/img/'.$row->image);?>" alt="Image" class="img-responsive">
                                <span class="portfolio-item-info"><strong><?php echo $row->judul;?></strong></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <!-- END Portfolio Items -->
                </div>
            </section>
            <!-- END Content -->

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