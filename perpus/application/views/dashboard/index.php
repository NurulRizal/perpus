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
                url:"<?php echo site_url('dashboard/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('dashboard/petugas/delete_success');?>";
                }
            });
        });
    });
</script><!-- Page content -->
                <div id="page-content">
                    <!-- Dashboard Header -->
                    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                    <div class="content-header content-header-media">
                        <div class="header-section">
                            <div class="row">
                                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                    <h1>Selamat Datang <strong><?php echo $this->session->userdata('username'); ?></strong><br><small>e-Library BPP Kemendagri</small></h1>
                                </div>
                                <!-- END Main Title -->
                            </div>
                        </div>
                        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                        <img src="<?php echo base_url('assets/img/placeholders/headers/dashboard_header.jpg');?>" alt="header image" class="animation-pulseSlow">
                    </div>
                    <!-- END Dashboard Header -->

                    <!-- Mini Top Stats Row -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="<?php echo site_url('anggota');?>" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        <strong>Anggota</strong><br>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="<?php echo site_url('buku');?>" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                        <i class="gi gi-book"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        <strong>Koleksi</strong><br>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="<?php echo site_url('peminjaman');?>" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                        <i class="gi gi-suitcase"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        <strong>Peminjaman</strong>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="<?php echo site_url('pengembalian');?>" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                                        <i class="gi gi-check"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        <strong>Pengembalian</strong>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Widget -->
                            <a href="<?php echo site_url('laporan/peminjaman');?>" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                                        <i class="gi gi-wallet"></i>
                                    </div>
                                    <div class="pull-right">
                                        <!-- Jquery Sparkline (initialized in js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                        <!--span id="mini-chart-sales"></span -->
                                    </div>
                                    <h3 class="widget-content animation-pullDown visible-lg">
                                        <strong>Laporan</strong>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        
                   </div>
                   </div>
                   <footer class="clearfix">
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri
                    </div>
                </footer>
                   <script src="<?php echo base_url('assets/js/pages/index.js');?>"></script>
        <script>$(function(){ Index.init(); });</script>
        