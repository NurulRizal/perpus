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
                    <li>
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

        <!-- Compose Message List -->
        <div class="col-sm-8 col-lg-9">
            <!-- Compose Message Block -->
            <div class="block">
                <!-- Compose Message Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" id="cc-input-btn" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Cc field"><i class="fa fa-plus"></i> Cc</a>
                        <a href="javascript:void(0)" id="bcc-input-btn"  class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Bcc field"><i class="fa fa-plus"></i> Bcc</a>
                    </div>
                    <h2>Compose <strong>Message</strong></h2>
                </div>
                <!-- END Compose Message Title -->

                <!-- Compose Message Content -->
                <form action="" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to">To</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="text" id="compose-to" name="compose-to" class="form-control form-control-borderless" placeholder="Where to?">
                            <input type="hidden" id="compose-to" name="compose-from" class="form-control form-control-borderless" placeholder="Where to?">
                        </div>
                    </div>
                    <div id="cc-input" class="form-group display-none">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to-cc">Cc</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-to-cc" name="compose-to-cc" class="form-control form-control-borderless" placeholder="Enter Cc emails..">
                        </div>
                    </div>
                    <div id="bcc-input" class="form-group display-none">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to-bcc">Bcc</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-to-bcc" name="compose-to-bcc" class="form-control form-control-borderless" placeholder="Enter Bcc emails..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-subject">Subject</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="text" id="compose-subject" name="compose-subject" class="form-control form-control-borderless" placeholder="Your subject..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-textarea-input">Message</label>
                        <div class="col-md-9">
                            <textarea id="example-textarea-input" name="klasifikasi" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Send</button>
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> Save Draft</button>
                        </div>
                    </div>
                </form>
                <!-- END Compose Message Content -->
            </div>
            <!-- END Compose Message Block -->
        </div>
        <!-- END Compose Message -->
    </div>
    <!-- END Inbox Content -->
                       <footer class="clearfix">
                    
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri</a>
                    </div>
                </footer>
<script src="<?php echo base_url('assets/js/pages/readyInboxCompose.js')?>"></script>
<script>$(function(){ ReadyInboxCompose.init(); });</script>
