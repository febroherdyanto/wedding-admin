<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/qrcode.js"></script>
    <title>Print Pria</title>
    <style>
        .tabel{
        width: 6cm;
        height: 3cm;
        border-style: double;
        }
        .nama{
        width: 4cm;
        height: 3cm;
        text-align: center;
        }
        .img{
        width: 2cm;
        height: 2cm;
        text-align: center;
        }
    </style>
</head>
<body>

<?php
    $db      = \Config\Database::connect();
    $query   = $db->query("SELECT * FROM doa");
    $hadir = $query->getResultArray();
?>
    <div class="tabel">
    <table>
        <tr>
        <td class="nama">
            Febro Herdyanto
            <br> di<br>
            UPB Cikarang
        </td>
        <td class="img">
            Gambar
        </td>
        </tr>
    </table>
    </div>

<input id="text" type="text" value="aku"  /><br />
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
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



</body>
</html>