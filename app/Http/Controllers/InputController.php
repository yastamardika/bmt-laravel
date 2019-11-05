<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Talent;

class InputController extends Controller
{
    public function index()
    {

        $artist = Talent::get();

        return view('index', ['artist' => $artist]);
    }

    // method untuk menampilkan view form tambah artist
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }
    // method untuk insert data ke table artist
    public function store(Request $request)
    {
        // insert data ke table artist


        $this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $foto->move($tujuan_upload,$nama_foto);

        Talent::create([
            'nama_artist' => $request->nama,
            'kategori' => $request->kategori,
            'nama_owner' => $request->owner,
            'deskripsi' => $request->deskripsi,
            'nomor_telepon' => $request->handphone,
            'alamat' => $request->alamat,
            'foto' => $nama_foto,
        ]);
        // alihkan halaman ke halaman artist
         return redirect('/input');
    }

    public function edit($id)
    {
        $artist = DB::table('artist')->where('id', $id)->get();
        // passing data artist yang didapat ke view edit.blade.php
        return view('edit', ['artist' => $artist]);
    }

    public function hapus($id)
    {
        DB::table('artist')->where('id', $id)->delete();

        // alihkan halaman ke halaman artist
        return redirect('/input');
    }
}
