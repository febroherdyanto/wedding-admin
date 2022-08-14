<?php 


?>

<div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qjmltau = $db->query("select count(*) as idGuest from guest");
                                                                    $tamu = $qjmltau->getResultArray();
                                                                    echo $tamu[0]['idGuest']; ?> Orang
                                                                    
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Total Tamu Undangan</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-people-roof"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data on  <?php echo date('d - M - Y') ?>.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qjmltau = $db->query("select count(*) as idGuest from guest where idKategori = 1");
                                                                    $tamu = $qjmltau->getResultArray();
                                                                    echo $tamu[0]['idGuest']; ?> Orang
                                                                    
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Tamu Undangan Pria</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-people-roof"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data on  <?php echo date('d - M - Y') ?>.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qjmltau = $db->query("select count(*) as idGuest from guest where idKategori = 2");
                                                                    $tamu = $qjmltau->getResultArray();
                                                                    echo $tamu[0]['idGuest']; ?> Orang
                                                                    
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Tamu Undangan Wanita</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-people-roof"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data on  <?php echo date('d - M - Y') ?>.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qjmldoa = $db->query("select count(*) as idDoa from doa");
                                                                    $doa = $qjmldoa->getResultArray();
                                                                    echo $doa[0]['idDoa']; ?> Doa / Harapan
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Total Doa dan Harapan</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-hands-praying"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qhadir = $db->query("select count(*) as idKehadiran from kehadiran where statusKehadiran = 'YA'");
                                                                    $hadir = $qhadir->getResultArray();
                                                                    echo $hadir[0]['idKehadiran']; ?> Tamu
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Kehadiran YA</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-user-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qhadir = $db->query("select count(*) as idKehadiran from kehadiran where statusKehadiran = 'MUNGKIN'");
                                                                    $hadir = $qhadir->getResultArray();
                                                                    echo $hadir[0]['idKehadiran']; ?> Tamu
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Kehadiran MUNGKIN</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-person-circle-question"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qhadir = $db->query("select count(*) as idKehadiran from kehadiran where statusKehadiran = 'TIDAK'");
                                                                    $hadir = $qhadir->getResultArray();
                                                                    echo $hadir[0]['idKehadiran']; ?> Tamu
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Kehadiran TIDAK</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-user-xmark"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-black">
                                                                    <?php $db      = \Config\Database::connect();
                                                                    $db = db_connect();
                                                                    
                                                                    $qhadir = $db->query("select count(*) as idKehadiran from kehadiran");
                                                                    $hadir = $qhadir->getResultArray();
                                                                    echo $hadir[0]['idKehadiran']; ?> Tamu
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">Jumlah Kehadiran</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa-solid fa-3x fa-people-roof"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0"><i>Updated data.</i></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">Febro Herdyanto</h4>
                                                                <h6 class="text-muted m-b-0">312010043</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-user f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Link : <a href="https://febroherdyanto.id/" style="color: white">https://febroherdyanto.id</a></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">User Guide</h4>
                                                                <h6 class="text-muted m-b-0">Manual / Documentation</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-book f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Link : <a href="https://siforate.portofolio.febroherdyanto.id/public/User-Guide.pdf" style="color: white">User-Guide.pdf</a></p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
    
                                            
                                        </div>
                                    </div>
</div>