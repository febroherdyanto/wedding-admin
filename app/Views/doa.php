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
                                <div class="table-sm table-responsive ">
                                    <table id="datatableFbr" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">#</th>
                                                <th width="20%">Waktu</th>
                                                <th width="20%">Nama</th>
                                                <th width="40%">Doa dan Harapan</th>
                                                <th width="10%">IP Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $db      = \Config\Database::connect();
                                            $query   = $db->query("SELECT * FROM doa");
                                            $hadir = $query->getResultArray();
                                            if($hadir): foreach ($hadir as $h):
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $h['waktu']; ?></td>
                                                    <td><?= $h['pengirimDoa']; ?></td>
                                                    <td><?= $h['ucapanDoa']; ?></td>
                                                    <td><?= $h['ipaddress']; ?></td>
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