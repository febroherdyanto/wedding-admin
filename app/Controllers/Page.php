<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\Config\View;

class Page extends BaseController
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function __construct()
    {
        $db = db_connect();
        $this->KategoriModel = new KategoriModel($db);
    }

    public function kategori()
    {
        $title = 'Kategori Mempelai';
        return view('kategori', compact('title'));
    }

    public function addKategori()
    {
        $title = 'Tambah Kategori';
        return view('addKategori', compact('title'));
    }

    public function saveKategori()
    {
        $data = [
            'namaKategori' => $this->request->getVar('namaKategori')
        ];
        $this->KategoriModel->add($data);
        return redirect()->to('/kategori');
    }

    public function editKategori($id)
    {
        $title = 'Edit Kategori';
        helper(['form', 'url']);

        $KategoriModel = new KategoriModel()   ;
        $data = array('idKategori' => $KategoriModel->find($id));
        return view('editKategori', compact('title', 'data'));
    }

    public function updateKategori($id)
    {
        helper(['form', 'url']);
        $KategoriModel = new KategoriModel();
        $data = array(
            'namaKategori' => $this->request->getVar('namaKategori')
        );
        $this->KategoriModel->update($id, $data);
        return redirect()->to('/kategori');
    }

    public function deleteKategori($id)
    {
        $KategoriModel = new KategoriModel();
        $KategoriModel->delete($id);
        return redirect()->to('/kategori');
    }

    public function kehadiran()
    {
        $title = 'Data Konfirmasi Kehadiran Tamu Undangan';
        return view('kehadiran', compact('title'));
    }

    public function doa()
    {
        $title = 'Data Doa dan Harapan Tamu Online';
        return view('doa', compact('title'));
    }
    
    public function printmain(){
        $title = 'Cetak Label Undangan Fisik';

        return view('print-main', compact('title'));
    }
}
