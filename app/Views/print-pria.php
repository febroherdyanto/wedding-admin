<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

<script type="text/javascript" src="<?= base_url('/assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/qrcode.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/code.js'); ?>"></script>
    <title>Cetak Label Undangan Pria</title>
    <style>
        body{
            width: 100%;
            max-width: fit-content;
            display: flex;
            flex-wrap: wrap;
        }
        table{
            display: flex;
            flex-wrap: wrap;
        }
        .tabel{
            width: 6cm;
            height: 3cm;
            border-style: solid;
            border-radius: 8px;
            align-items: center;
            text-align: center;
        }
        span.nama{
            width: 4cm;
            height: 2cm;
            text-align: center;
            font-size: 12px;
        }
        span.img{
            width: 2cm;
            height: 2cm;
            text-align: center;
            align-items: center;
            align-content: center;
        }
    </style>
</head>
<body>



<?php
    $db      = \Config\Database::connect();
    $query   = $db->query("SELECT * FROM guest where idKategori=1");
    $kartu = $query->getResultArray();
    if($kartu): foreach ($kartu as $k):
?>
        <table>
            <tr>
                <td class="tabel">
                    <table>
                        <tr>
                            <td style="width: 4cm; height: 2cm;">
                                <span class="nama">
                                    <b>
                                        <?php if($k['sapaanGuest']== NULL){
                                            echo $k['namaGuest'];
                                        }else{
                                            echo $k['sapaanGuest'].". ".$k['namaGuest'];
                                        } ?>
                                    </b>
                                    <br> di<br>
                                    <i><?= $k['alamatGuest']; ?></i>
                                    <input id="text" type="hidden" value="https://wedding.febroherdyanto.id/<?= $k['nicknameGuest']; ?>" hidden>
                                </span>
                            </td>
                            <td style="width: 2cm; height: 2cm;">
                                <span class="img" align="center">
                                    <span id="qrcode<?= $k['idGuest']; ?>" style="align-content:center; margin-top:15px;"></span>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


    <script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode<?= $k['idGuest']; ?>"), {
	width : 60,
	height : 60
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>

<?php endforeach; else: ?>
    <i>Tidak Ada Data</i>
<?php endif; ?>





</body>
</html>