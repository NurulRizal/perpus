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
        <!-- View Message -->
        <div class="col-sm-8 col-lg-9">
            <!-- View Message Block -->
            <div class="block full">
                <!-- View Message Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                    </div>
                    <h2><strong><?php echo $buku['subject'];?></strong> <</h2>
                </div>
                <!-- END View Message Title -->

                <!-- Message Meta -->
                <table class="table table-borderless table-vcenter remove-margin">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 80px;">
                            </td>
                            <td class="hidden-xs">
                                <a href=""><strong><?php echo $buku['dari'];?></strong></a> to <a href="page_ready_user_profile.php"><strong><?php echo $buku['ke'];?></strong></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <!-- END Message Meta -->

                <!-- Message Body -->
                <?php echo $buku['body'];?>
                <hr>
                <!-- END Message Body -->

                <form action="page_ready_inbox_message.php" method="post" onsubmit="return false;">
                    <textarea id="message-quick-reply" name="message-quick-reply" rows="5" class="form-control push-bit" placeholder="Your message.."></textarea>
                    <button class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Quick Reply</button>
                </form>
                <!-- END Quick Reply Form -->
            </div>
            <!-- END View Message Block -->
        </div>
        <!-- END View Message -->
    </div>
    <!-- END Inbox Content -->
                       <footer class="clearfix">
                    
                    <div class="pull-left">
                        <span id=""></span> 2016 BPP Kemendagri</a>
                    </div>
                </footer>
<script src="<?php echo base_url('assets/js/pages/readyInboxCompose.js')?>"></script>
<script>$(function(){ ReadyInboxCompose.init(); });</script>
