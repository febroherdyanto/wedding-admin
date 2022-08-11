<?php

namespace App\Controllers;

use App\Models\InvitationModel;
use CodeIgniter\Config\View;

class Invitation extends BaseController
{
    public function __construct()
    {
        $db = db_connect();
        $this->InvitationModel = new InvitationModel($db);
    }
    
    public function invPria(){
        $title = 'Data Undangan Online';

        return view('invPria', compact('title'));
    }

    public function editStatusPria($id){
        $InvitationModel = new InvitationModel();
        
        $data = array(
            'msgStatus' => $this->request->getVar('msgStatus')
        );
        $this->InvitationModel->update($id, $data);
        return redirect()->to('/inv-pria');
    
    }
    
    public function invWanita(){
        $title = 'Data Undangan Online';

        return view('invWanita', compact('title'));
    }

    public function editStatusWanita($id){
        $InvitationModel = new InvitationModel();
        
        $data = array(
            'msgStatus' => $this->request->getVar('msgStatus')
        );
        $this->InvitationModel->update($id, $data);
        return redirect()->to('/inv-wanita');
    
    }

}