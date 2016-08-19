<!-- Page content -->
                <div id="page-content">
                    <!-- Forms General Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-book"></i><?php echo "Tambah Koleksi"?><br><br>
                                
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Forms</li>
                        <li><a href="">Tambah Koleksi</a></li>
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
                                        <label class="col-md-3 control-label" for="example-text-input">Kode Koleksi</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="kode" class="form-control" placeholder="Kode Koleksi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Kode Panggil</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="kodepanggil" class="form-control" placeholder="Kode Panggil" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">ISBN</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="isbn" class="form-control" placeholder="ISBN" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Subject</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="subject" class="form-control" size="1">
                                                <option value="0">Please select</option>
                                                <?php foreach($subject as $row):?>
                                                <option value="<?= $row->id_subject?>"><?= $row->nama_subject?></option>
                                            <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Jenis</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="jenis" class="form-control" size="1">
                                                <option value="0">Please select</option>
                                                <?php foreach($jenis as $row):?>
                                                <option value="<?= $row->id_jenis?>"><?= $row->nama_jenis?></option>
                                            <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Judul Koleksi</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="judul" class="form-control" placeholder="Judul Koleksi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Penerbit</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="penerbit" class="form-control" placeholder="Penerbit">
                                            <input type="text" id="example-text-input" name="thn_terbit" class="form-control" placeholder="Tahun Terbit">
                                            <input type="text" id="example-text-input" name="tmpt_terbit" class="form-control" placeholder="Tempat Terbit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Pengarang</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="pengarang" class="form-control" placeholder="Pengarang" required>
                                            <input type="text" id="example-text-input" name="pengarang2" class="form-control" placeholder="Pengarang">
                                            <input type="text" id="example-text-input" name="pengarang3" class="form-control" placeholder="Pengarang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Fisik Koleksi</label>
                                        <div class="col-md-9">
                                            <textarea id="example-textarea-input" name="klasifikasi" rows="9" class="form-control" placeholder="Content.."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Lokasi Rak</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="lokasi" class="form-control" placeholder="Lokasi Rak">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Stock</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-text-input" name="stock" class="form-control" placeholder="Stock Buku">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Gambar</label>
                                        <div class="col-md-9">
                                            <input type="file" id="example-text-input" name="gambar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">E-Book</label>
                                        <div class="col-md-9">
                                            <input type="file" id="example-text-input" name="ebook" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-text-input"></label>
                                    <div class="col-md-9">
                                    <input id="example-checkbox1" name="publish" value="1" type="checkbox"> Publish
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

