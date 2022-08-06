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
                                <div class="table-responsive">
                                    <table id="datatableFbr" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Waktu</th>
                                                <th>Nama</th>
                                                <th>Doa dan Harapan</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $db      = \Config\Database::connect();
                                            $query   = $db->query("SELECT * FROM kehadiran");
                                            $hadir = $query->getResultArray();
                                            if($hadir): foreach ($hadir as $h):
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $h['waktu']; ?></td>
                                                    <td>
                                                        <?php $ceknama = $db->query("SELECT * FROM guest WHERE idGuest = '".$h['idGuest']."'")->getRowArray(); ?>
                                                        <?= $ceknama['namaGuest']; ?>
                                                    </td>
                                                    <td><?= $h['statusKehadiran']; ?></td>
                                                    <td><?= $h['pesan']; ?></td>
                                                </tr>
                                            <?php endforeach; else: ?>
                                                <tr>
                                                    <td colspan="4" align="center"><i>Tidak Ada Data</i></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div> <?php // end of table-responsive ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('template/footerforcontent'); ?>