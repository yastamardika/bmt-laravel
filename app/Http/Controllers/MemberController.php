<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        // insert data ke table member
        Member::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomorhp' => $request->nomorhp,
            'kota' => $request->kota,
            'deskripsi' => $request->deskripsi,
        ]);

    }
}
