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
                                                <th>Nama Tamu Undangan</th>
                                                <th>Alamat Tamu Undangan</th>
                                                <th>Nomor WhatsApp</th>
                                                <th>Status Undangan</th>
                                                <th>Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                function send_whatsapp($phone, $message){
                                                    $apikey="ok8YnCnAybJB"; // API Key dari infobip

                                                    $url = 'https://api.textmebot.com/send.php?recipient='.$phone.'&apikey='.$apikey.'&text='.$message;
                                                    //$url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;

                                                    if($ch = curl_init($url))
                                                    {
                                                        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                                                        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                                        $html = curl_exec($ch);
                                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                                        // echo "Output:".$html;  // you can print the output for troubleshooting
                                                        curl_close($ch);
                                                        return (int) $status;
                                                    }
                                                    else
                                                    {
                                                        return false;
                                                    }
                                                }

                                            $no = 1;
                                            $db      = \Config\Database::connect();
                                            $query   = $db->query("SELECT * FROM guest WHERE idKategori = 1");
                                            $inv = $query->getResultArray();
                                            if($inv): foreach ($inv as $v):
                                                $telp = $v['telpGuest'];
                                                $nama = $v['namaGuest'];
                                                $nickname = $v['nicknameGuest'];
                                                $tempat = $v['alamatGuest'];
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td>
                                                        <?php if($v['sapaanGuest']== NULL){
                                                            $fullname = $v['namaGuest'];
                                                            echo $fullname;
                                                        }else{
                                                            $fullname = $v['sapaanGuest'].". ".$v['namaGuest'];
                                                            echo $fullname;
                                                        } ?>
                                                    </td>
                                                    <td><?= $v['alamatGuest']; ?></td>
                                                    <td><?= $telp; ?></td>
                                                    <td><?= $v['msgStatus']; ?></td>
                                                    <td><?= $v['nominal']; ?></td>
                                                    <td>
                                                        <?php 
                                                            $pesan = "Assalamu'alaikum Warahmatullahi Wabarakaatuh 
                                                            %0A$fullname di $tempat, 
                                                            %0A
                                                            %0ADengan memohon rahmat dan ridho Allah SWT, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami, yang insyaAllah akan dilaksanakan pada:
                                                            %0A%0AAkad Nikah
                                                            %0AHari/Tanggal: Kamis, 22 September 2022
                                                            %0AJam: 09.00 WIB
                                                            %0ATempat: Bertempat di kediaman Mempelai Wanita. Dukuh Wates RT/RW 017/003, Desa Kedungbanteng, Pilangkenceng, Madiun 
                                                            
                                                            %0A%0AResepsi Pernikahan
                                                            %0AHari/Tanggal: Kamis, 22 September 2022
                                                            %0AJam: 13.00 WIB
                                                            %0ATempat: Bertempat di kediaman Mempelai Wanita. Dukuh Wates RT/RW 017/003, Desa Kedungbanteng, Pilangkenceng, Madiun
                                                            
                                                            %0A%0ANgunduh Mantu
                                                            %0AHari/Tanggal: Sabtu, 24 September 2022
                                                            %0AJam: 10.00 WIB
                                                            %0ATempat: Bertempat di kediaman Mempelai Pria. Perum. Star Regency Blok A, Dusun Blimbing, Desa Klecorejo, Mejayan, Madiun
                                                            
                                                            %0A%0AKehadiran Anda adalah silaturahmi, doa restu Anda adalah kado terindah bagi kami, kehadiran Anda adalah doa restu yang tak ternilai harganya.
                                                            %0AJazakumullahu khairan katsiran, hanya kepada ilahi rabbi tercurah doa sebagai ungkapan terima kasih kami. 
                                                            %0AWassalamu'alaikum warahmatullahi wabarakatuh";
                                                            
                                                            $link = "https://api.textmebot.com/send.php?recipient=".$telp."&apikey=ok8YnCnAybJB&text=".$pesan."&footer=Invitation Link : https://wedding.febroherdyanto.id/".$nickname."&button1=Ya, Pasti Hadir&
                                                            button2=Mohon Maaf, belum bisa hadir&json=yes";
                                                        ?>

                                                        <form class="form-material" action="<?= base_url('inv-pria/update/'.$v['idGuest']) ?>" method="POST">
                                                            <input type="hidden" name="msgStatus" value="SENT">
                                                            <input type="hidden" name="telpGuest" value="<?= $telp; ?>">
                                                            <input type="hidden" name="pesan" value="<?= $pesan; ?>">
                                                            <input type="hidden" name="nicknameGuest" value="<?= $nickname; ?>">
                                                            <a href="<?= $link ?>" target="_blank" onclick="hyperlink()">
                                                            <div>
                                                            <button type="submit" name="simpan" class="btn btn-sm btn-out waves-effect waves-light btn-success btn-square">
                                                            <i class="fa-brands fa-whatsapp"></i> Send Invitation
                                                            </button>
                                                            </div>
                                                            </a>
                                                        </form>
                                                    </td>
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


<script type="text/javascript">
    function hyperlink(){
        var url = "<?= $link; ?>";
        var fullname = "<?= $fullname; ?>";
        var telp = "<?= $telp; ?>";
        confirm("Apakah anda yakin ingin mengirim Undangan ke " + fullname + " - +" + telp + "?");
        //window.open(url,'popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no');
    }
</script>

<?= $this->include('template/footerforcontent'); ?>