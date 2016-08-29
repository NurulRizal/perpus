<div id="page-content">
                   <!-- Inbox Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="gi gi-envelope"></i> Inbox<br><small>Your Message Center</small></h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li>Message Center</li>
        <li><a href="">Inbox</a></li>
    </ul>
    <!-- END Inbox Header -->

    <!-- Inbox Content -->
    <div class="row">
        <!-- Inbox Menu -->
        <div class="col-sm-4 col-lg-3">
            <!-- Menu Block -->
            <div class="block full">
                <!-- Menu Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                    </div>
                    <div class="block-options pull-left">
                        <a href="<?php echo site_url('email/tambah');?>" class="btn btn-alt btn-sm btn-default"><i class="fa fa-pencil"></i> Compose Message</a>
                    </div>
                </div>
                <!-- END Menu Title -->

                <!-- Menu Content -->
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="<?php echo site_url('email');?>">
                            <span class="badge pull-right"><?= $total_rows; ?></span>
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Inbox</strong>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('email/out');?>">
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Sent</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Menu Content -->
            </div>
            <!-- END Menu Block -->
        </div>
        <!-- END Inbox Menu -->

        <!-- Messages List -->
        <div class="col-sm-8 col-lg-9">
            <!-- Messages List Block -->
            <div class="block">
                <!-- Messages List Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Inbox <strong>(<?= $total_rows; ?>)</strong></h2>
                </div>
                <!-- END Messages List Title -->

                <!-- Messages List Content -->
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            
                        </thead>
                        <tbody>
                            <!-- Use the first row as a prototype for your column widths -->
                            
                            <?php foreach($buku as $row):?>
                                <tr>
                                <td style="width: 20%;"><?= $row->dari ?></td>
                                <td>
                                    <a href="<?php echo site_url('email/edit/'.$row->id_email);?>"><strong><?= $row->subject ?></strong></a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        
                        </tbody>
                    </table>
                </div>
                <!-- END Messages List Content -->
            </div>
            <!-- END Messages List Block -->
        </div>
        <!-- END Messages List -->
    </div>
    <!-- END Inbox Content -->
                       <footer class="clearfix">
                    
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri</a>
                    </div>
                </footer>

<script src="<?php echo base_url('assets/js/pages/readyInboxCompose.js')?>"></script>
<script>$(function(){ ReadyInboxCompose.init(); });</script>