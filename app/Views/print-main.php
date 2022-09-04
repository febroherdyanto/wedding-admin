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
                                <a href="<?= base_url('/print/pria'); ?>" target="_blank"> <button class="btn btn-out waves-effect waves-light btn-primary btn-square" name="save"><i class="fa fa-print"></i> <i class="fa-solid fa-person"></i> Cetak Label Undangan Pria</button></a>

                                <a href="<?= base_url('/print/wanita'); ?>" target="_blank"> <button class="btn btn-out waves-effect waves-light btn-primary btn-square" name="save"><i class="fa fa-print"></i> <i class="fa-solid fa-person-dress"></i> Cetak Label Undangan Wanita</button></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('template/footerforcontent'); ?>