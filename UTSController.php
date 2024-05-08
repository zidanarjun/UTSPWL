<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }
    public function create()
    {
        return view('uts.create');
    }
    public function list()
    {
        $mhs = [
            [
                "id" => "1",
                "nama_lengkap" => "Wildan Aziz Muhammad",
                "nim" => "22104410066",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "2",
                "nama_lengkap" => "Firman Sukma Adiningrat",
                "nim" => "22104410079",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "3",
                "nama_lengkap" => "Zidan Arjun Prayoga",
                "nim" => "22104410104",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "4",
                "nama_lengkap" => "Aurel Dhea Fernanda Putra ",
                "nim" => "22104410120",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "1",
                "nama_lengkap" => "Lutfi Hanif Faizin",
                "nim" => "22104410109",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
        ];
        $mhs = json_decode(json_encode($mhs));
        return view('uts.list', [
            "mhs" => $mhs
        ]);
    }
    public function store(Request $req)
    {
        $mhs = [
            "nama_lengkap" => $req->nama_lengkap,
            "nim" => $req->nim,
            "jurusan" => $req->jurusan,
            "alamat" => $req->alamat,
            "telp" => $req->telp,
            "semester" => $req->semester,
        ];
        $mhs = json_decode(json_encode($mhs));
        return redirect('/uts/create')->with('pass-key', "Data Mahasiswa Berhasil Disimpan")->with('mhs', $mhs);
    }
}
