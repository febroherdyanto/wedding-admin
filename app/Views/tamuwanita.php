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
                                <a href="<?= base_url('tamu/add'); ?>" class="btn btn-out waves-effect waves-light btn-primary btn-square"><i class="fa fa-plus"></i> Add Data</a>
                                </p>
                            </div>
                            
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="datatableFbr" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID Kategori</th>
                                                <th>Nama Tamu</th>
                                                <th>Nickname</th>
                                                <th>Alamat</th>
                                                <th>WhatsApp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $db      = \Config\Database::connect();
                                            $query   = $db->query("SELECT * FROM guest where idKategori = 2");
                                            $tamu = $query->getResultArray();
                                            if($tamu): foreach ($tamu as $t):
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td>
                                                        <?php $cekkategori = $db->query("SELECT * FROM kategori WHERE idKategori = '".$t['idKategori']."'")->getRowArray(); ?>
                                                        <?= $cekkategori['namaKategori']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($t['sapaanGuest']== NULL){
                                                            echo $t['namaGuest'];
                                                        }else{
                                                            echo $t['sapaanGuest'].". ".$t['namaGuest'];
                                                        } ?>
                                                    </td>
                                                    <td><?= $t['nicknameGuest']; ?></td>
                                                    <td><?= $t['alamatGuest']; ?></td>
                                                    <td><?= $t['telpGuest']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('tamu/edit/'.$t['idGuest']); ?>" class="btn btn-out waves-effect waves-light btn-primary btn-square"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="<?= base_url('tamu/delete/'.$t['idGuest']); ?>" class="btn btn-out waves-effect waves-light btn-danger btn-square" onclick="confirm('Apakah Anda yakin untuk menghapus data tamu ini?');"><i class="fa fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; else: ?>
                                                <tr>
                                                    <td colspan="7" align="center"><i>Tidak Ada Data</i></td>
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