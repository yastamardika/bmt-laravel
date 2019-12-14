<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function utama()
    {
        $artist = DB::table('artist')->limit(6)->latest()->get();
        $artist2 = DB::table('artist')->limit(2)->latest()->get();

        return view('pages.main', ['artist' => $artist,'artist2' => $artist2]);
    }

    public function detail($id)
    {
        $artist = DB::table('artist')->where('id', $id)->get();
        // passing data artist yang didapat ke view edit.blade.php
        return view('pages.detail', ['artist' => $artist]);
    }

    public function listCategory($id){
        $artist = DB::table('artist')->where('kategori',$id)->paginate(10);
        $trunc = Str::limit($artist['deskripsi'],20);

        return view('pages.list', ['artist' => $artist, 'kategori'=>$id ,'deskripsi'=>$trunc]);
    }

    public function category(){
        $artist = DB::table('artist')->limit(8)->get();
        return view('pages.category', ['artist' => $artist]);
    }
}
