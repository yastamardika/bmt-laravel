<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function utama()
    {
        $artist = DB::table('artist')->get();

        return view('pages.main', ['artist' => $artist]);
    }
}
