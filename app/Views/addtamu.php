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
                                
                                <form class="form-material" action="<?= base_url('tamu/save') ?>" method="POST">                                    
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Kategori</label>
                                        <div class="col-sm-4">
                                            <?php 
                                            $db      = \Config\Database::connect();
                                            $query = $db->query("SELECT * FROM kategori");
                                            $kategori = $query->getResultArray();
                                            if($kategori): foreach ($kategori as $k): ?>
                                                <div class="input-group form-check">
                                                    <input class="form-check-input" type="radio" name="idKategori" value="<?= $k['idKategori']; ?>" id="<?= $k['idKategori']; ?>">
                                                    <label class="form-check-label" for="<?= $k['idKategori']; ?>"><b>Untuk Mempelai <?= $k['namaKategori']; ?></b></label>
                                                </div>
                                            <?php endforeach; else: ?>
                                                <i>Tidak Ada Data</i>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="sapaanGuest" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Sapaan Tamu | Boleh dikosongkan</label>
                                        <code>Contoh Sapaan : Pak, Bu, Mba, Mas, Teh, Bang, dll. </code>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="namaGuest" class="form-control" required="" id="namaGuest" onchange="myChangeFunction(this)">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nama Tamu</label>
                                    </div>

                                    <div class="form-group form-info form-static-label">
                                        <input type="text" name="nicknameGuest" class="form-control" id="nicknameGuest" required="" readonly>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nickname Tamu | <i class="fa fa-ban"></i> Nickname dibuat otomatis oleh sistem</label>
                                        <code>Digunakan untuk URL Website</code>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="alamatGuest" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Alamat Singkat Tamu</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="number" name="telpGuest" class="form-control" required="" value="62">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nomor WhatsApp Tamu | <b><i class="fa fa-ban"></i> Diawali 62, tanpa simbol + atau -</b></label>
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

<script type="text/javascript">
    function makeid(length) {
        var result           = '';
        var characters       = '0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    function myChangeFunction(namaGuest) {
        var nicknameGuest = document.getElementById('nicknameGuest');

        var myStr = document.getElementById('namaGuest').value;
        var firstWord = myStr.split(" ")[0];

        document.getElementById("nicknameGuest").value = firstWord.toLowerCase()+"-"+makeid(3);
    }
</script>


<?= $this->include('template/footerforcontent'); ?>