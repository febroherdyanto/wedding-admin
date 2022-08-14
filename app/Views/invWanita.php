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
                                            $query   = $db->query("SELECT * FROM guest WHERE idKategori = 2 ORDER BY msgStatus DESC, namaGuest ASC");
                                            $inv = $query->getResultArray();
                                            if($inv): foreach ($inv as $v):
                                                $idGuest = $v['idGuest'];
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
                                                        } 

                                                        $pesan = "_Assalamu'alaikum%20Warahmatullahi%20Wabarakaatuh_%0A*$fullname*%20di%20$tempat,%0A%0ADengan%20memohon%20rahmat%20dan%20ridho%20Allah%20SWT,%20kami%20mengundang%20Bapak/Ibu/Saudara/i%20untuk%20menghadiri%20pernikahan%20kami,%20yang%20insyaAllah%20akan%20dilaksanakan%20pada:%20%0A%0A*Akad%20Nikah*%0AHari/Tanggal%20%20:%20Kamis,%2022%20September%202022%20%0AJam%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20:%2009.00%20WIB%20%0ATempat%20%20%20%20%20%20%20%20%20%20%20:%20Bertempat%20di%20kediaman%20Mempelai%20Wanita.%0A_Dukuh%20Wates%20RT/RW%20017/003,%20Desa%20Kedungbanteng,%20Pilangkenceng,%20Madiun_%20%0A%0A*Resepsi%20Pernikahan*%0AHari/Tanggal%20:%20Kamis,%2022%20September%202022%20%0AJam%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20:%2013.00%20WIB%0ATempat%20%20%20%20%20%20%20%20%20%20:%20Bertempat%20di%20kediaman%20Mempelai%20Wanita.%0A_Dukuh%20Wates%20RT/RW%20017/003,%20Desa%20Kedungbanteng,%20Pilangkenceng,%20Madiun_%0A%0A%0AKehadiran%20Anda%20adalah%20silaturahmi,%20Do'a%20restu%20Anda%20adalah%20kado%20terindah%20bagi%20kami%20yang%20tak%20ternilai%20harganya.%0A%0AJazakumullahu%20khairan%20katsiran,%20hanya%20kepada%20ilahi%20rabbi%20tercurah%20doa%20sebagai%20ungkapan%20terima%20kasih%20kami.%0A%0A_Wassalamu'alaikum%20warahmatullahi%20wabarakatuh_%0A%0AKami%20yang%20berbahagia,%0A*_Febro%20dan%20Mustika_*";
                                                            /*$pesan = "_Assalamu'alaikum Warahmatullahi Wabarakaatuh_
                                                            %0A*$fullname* di $tempat,
                                                            %0A
                                                            %0ADengan memohon rahmat dan ridho Allah SWT, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami, yang insyaAllah akan dilaksanakan pada: 
                                                            %0A
                                                            %0A*Akad Nikah*
                                                            %0AHari/Tanggal  : Kamis, 22 September 2022 
                                                            %0AJam                 : 09.00 WIB 
                                                            %0ATempat           : Bertempat di kediaman Mempelai Wanita.
                                                            %0A_Dukuh Wates RT/RW 017/003, Desa Kedungbanteng, Pilangkenceng, Madiun_ 
                                                            %0A
                                                            %0A*Resepsi Pernikahan*
                                                            %0AHari/Tanggal : Kamis, 22 September 2022 
                                                            %0AJam                : 13.00 WIB 
                                                            %0ATempat          : Bertempat di kediaman Mempelai Wanita.
                                                            %0A_Dukuh Wates RT/RW 017/003, Desa Kedungbanteng, Pilangkenceng, Madiun_
                                                            %0A
                                                            %0A*Ngunduh Mantu*
                                                            %0AHari/Tanggal : Sabtu, 24 September 2022 
                                                            %0AJam                : 10.00 WIB 
                                                            %0ATempat          : Bertempat di kediaman Mempelai Pria.
                                                            %0A_Perum. Star Regency Blok A, Dusun Blimbing, Desa Klecorejo, Mejayan, Madiun_
                                                            %0A
                                                            %0AKehadiran Anda adalah silaturahmi, Do'a restu Anda adalah kado terindah bagi kami yang tak ternilai harganya.
                                                            %0A
                                                            %0AJazakumullahu khairan katsiran, hanya kepada ilahi rabbi tercurah doa sebagai ungkapan terima kasih kami. 
                                                            %0A
                                                            %0A_Wassalamu'alaikum warahmatullahi wabarakatuh_
                                                            %0A
                                                            %0AKami yang berbahagia,
                                                            %0A*_Febro dan Mustika_*";
                                                            */
                                                            
                                                            $link = "https://api.textmebot.com/send.php?recipient=".$telp."&apikey=ok8YnCnAybJB&text=".$pesan."&footer=Invitation Link : https://wedding.febroherdyanto.id/".$nickname."&button1=Ya, Pasti Hadir&
                                                            button2=Mohon Maaf, belum bisa hadir&json=yes";
                                                        ?>
                                                    </td>
                                                    <td><?= $v['alamatGuest']; ?></td>
                                                    <td><?= $telp; ?></td>
                                                    <td><?= $v['msgStatus']; ?></td>
                                                    <td><?= $v['nominal']; ?></td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-sm btn-out waves-effect waves-light btn-success btn-square" data-toggle="modal" data-target="#exampleModalCenter<?= $idGuest; ?>">
                                                            <i class="fa-brands fa-whatsapp"></i> Send
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter<?= $idGuest; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Kirim Undangan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('/inv-pria/update/'.$idGuest); ?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8">
                                                                    Apakah Anda ingin mengirim Undangan ke <?= $fullname; ?>? (+<?= $telp; ?>) ?
                                                                    <input type="hidden" name="msgStatus" value="SENT">
                                                                    <input type="hidden" name="link" value="<?= $link; ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-out waves-effect waves-light btn-secondary btn-square" data-dismiss="modal">Close</button>
                                                                <a href="<?= $link; ?>" onclick="window.open(<?= $link; ?>,'popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no');" target="_blank">
                                                                    <button type="button" class="btn btn-sm btn-out waves-effect waves-light btn-success btn-square">
                                                                        <i class="fa-brands fa-whatsapp"></i> Send Invitation
                                                                    </button>
                                                                </a>
                                                                <button type="submit" name="proses" onclick="hyperlink()" id="send_form" class="btn btn-sm btn-out waves-effect waves-light btn-primary btn-square">Submit</button>
                                                            </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <!-- PROSES UPDATE DATA DAN KIRIM UNDANGAN -->
                                                        <!-- AKHIR PROSES UPDATE DATA DAN KIRIM UNDANGAN -->
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
        confirm("Apakah anda yakin ingin mengirim Undangan ke " + fullname + " - +" + telp + "?");
        window.open('https://google.com','popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no');
    }
</script>

<?= $this->include('template/footerforcontent'); ?>