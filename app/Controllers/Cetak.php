<?php

namespace App\Controllers;


use App\Models\InvitationModel;
use CodeIgniter\Config\View;
use App\Libraries\Pdf;
use App\ThirdParty\fpdf\fpdf;



class Cetak extends BaseController {
    function __construct(){
        require_once(APPPATH.'/ThirdParty/fpdf/fpdf.php');
    }
	public function pria()
	{   
        return view('print-pria');        
	}
	public function wanita()
	{   
        return view('print-wanita');        
	}
}