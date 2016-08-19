<!-- Page content -->
                <div id="page-content">
                    <!-- Forms General Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-user"></i><?php echo "Edit Data Anggota";?><br><br>
                                
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Forms</li>
                        <li><a href="">Edit Data Anggota</a></li>
                    </ul>
                    <!-- END Forms General Header -->
<?php echo validation_errors();?>
                                <?php echo $message;?>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Basic Form Elements Block -->
                            <div class="block">
                                
                                <form  action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Nomor Anggota</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="no_anggota" class="form-control" placeholder="Nomor Anggota" value="<?php echo $anggota['no_anggota'];?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">NIP/No KTP/No SIM</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="nis" class="form-control" placeholder="NIP" value="<?php echo $anggota['nis'];?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="nama" class="form-control" placeholder="Nama" value="<?php echo $anggota['nama'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" id="example-text-input" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Jenis KeAnggotaan</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="stat" class="form-control" size="1">
                                                <option value="0">Please select</option>
                                                <option value="<?= $anggota['status'];?>" selected><?= $anggota['status'];?></option>
                                                <option value="Premium">Premium</option>
                                                <option value="Biasa">Biasa</option>
                                            </select>
                                        </div>
                                        <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><font color="red">"jenis keanggotaan premium hanya untuk pegawai BPP Kemendagri"</font></i></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Divisi</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="divisi" class="form-control" size="1">
                                                <option value="0">Please select</option>
                                                <?php foreach($divisi as $row):
                                                if($row->id_divisi == $anggota['id_divisi']){?>
                                                <option value="<?= $row->id_divisi?>" selected><?= $row->nama_divisi?></option>
                                            <?php }else{ ?>
                                                <option value="<?= $row->id_divisi?>"><?= $row->nama_divisi?></option>
                                            <?php } endforeach ?>
                                            </select>
                                        </div>
                                        <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><font color="red">"dikosongkan jika bukan pegawai BPP Kemendagri"</font></i></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Select</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="jk" class="form-control" size="1">
                                            <option value="<?php echo $anggota['jk'];?>"><?php echo $anggota['jk'];?></option>
                                                <option value="L">Laki - Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" id="example-text-input" name="email" class="form-control" placeholder="Email" value="<?php echo $anggota['email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">No Telp</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="telp" class="form-control" placeholder="No Telp" value="<?php echo $anggota['phone'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Gambar</label>
                                        <div class="col-md-9">
                                            <img src="<?php echo base_url('assets/img/anggota'.$anggota['image']);?>" height="200px" width="200px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Gambar</label>
                                        <div class="col-md-9">
                                            <input type="file" id="example-text-input" name="gambar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Update</button>
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
                        <span id=""></span>2016 BPP Kemendagri
                    </div>
                </footer>
                <!-- END Footer -->



<script src="js/pages/formsGeneral.js"></script>
        <script>$(function(){ FormsGeneral.init(); });</script>

