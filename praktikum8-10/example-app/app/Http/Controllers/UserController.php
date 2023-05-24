<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return view('user/index' , ['kategoriuser' => 'admin' ] );
    }

    public function daftar ()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff"];
        return view('user/daftar',  ['kategori' => $ar_kategori ] );
    }
    
    public function store(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/sukses',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
    }

    // Kode untuk memanggil dari form pemeriksaan
    public function pemeriksaan ()
    {
        $ar_jenis = ["Pria", "Wanita"];
        return view('user/pemeriksaan' , ['jenis' => $ar_jenis ] );
    }

    // Kode untuk mengambil inputan dari form dan di pindah ke pasien
    public function pasien(Request $request){
        $nama = $request->input('nama');
        $tgl_lahir = $request->input('tgl_lahir');
        $usia = $request->input('usia');
        $jk = $request->input('jk');
        return view('user/pasien',
            ['nama'=>$nama, 'tgl_lahir'=>$tgl_lahir, 'usia'=>$usia, 'jk'=>$jk]);
    }
}
