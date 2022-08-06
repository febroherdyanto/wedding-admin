<?php

namespace App\Controllers;

use App\Models\TamuModel;
use CodeIgniter\Config\View;

class Tamu extends BaseController
{
    public function index(){
        $title = 'Data Tamu';

        return view('tamu', compact('title'));
    }

    public function __construct()
    {
        $db = db_connect();
        $this->TamuModel = new TamuModel($db);
    }

    public function addTamu(){
        $title = 'Tambah Tamu';
        return view('addTamu', compact('title'));
    }

    public function saveTamu(){
        $data = [
            'idKategori' => $this->request->getVar('idKategori'),
            'sapaanGuest' => $this->request->getVar('sapaanGuest'),
            'namaGuest' => $this->request->getVar('namaGuest'),
            'nicknameGuest' => $this->request->getVar('nicknameGuest'),
            'alamatGuest' => $this->request->getVar('alamatGuest'),
            'telpGuest' => $this->request->getVar('telpGuest')
        ];
        $this->TamuModel->add($data);
        return redirect()->to('/tamu');
    }

    public function editTamu($id){
        $title = 'Edit Tamu';
        helper(['form', 'url']);

        $TamuModel = new TamuModel()   ;
        $data = array('idTamu' => $TamuModel->find($id));
        return view('editTamu', compact('title', 'data'));
    }

    public function updateTamu($id){
        helper(['form', 'url']);
        $TamuModel = new TamuModel();
        $data = array(
            'idKategori' => $this->request->getVar('idKategori'),
            'sapaanGuest' => $this->request->getVar('sapaanGuest'),
            'namaGuest' => $this->request->getVar('namaGuest'),
            'nicknameGuest' => $this->request->getVar('nicknameGuest'),
            'alamatGuest' => $this->request->getVar('alamatGuest'),
            'telpGuest' => $this->request->getVar('telpGuest')
        );
        $this->TamuModel->update($id, $data);
        return redirect()->to('/tamu');
    }

    public function deleteTamu($id){
        $this->TamuModel->delete($id);
        return redirect()->to('/tamu');
    }
    

}