<?= $this->include('template/headerforcontent'); ?>

<!-- Page-header end -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                                <h5><?= strtoupper($title); ?></h5>
                                
                                <p class="text-right">
                                
                                </p>
                            </div>
                            
                            <div class="card-block">
                                <!-- 
                                    // ===========================================================
                                    // =============== You Can Place the Data Here ===============
                                    // ===========================================================
                                -->
                                
                                <form class="form-material" action="<?= base_url('kategori/save') ?>" method="POST">
                                    <div class="form-group form-primary">
                                        <input type="text" name="namaKategori" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nama Kategori</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <button class="btn btn-out waves-effect waves-light btn-primary btn-square" name="save"><i class="fa fa-save"></i> Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('template/footerforcontent'); ?>