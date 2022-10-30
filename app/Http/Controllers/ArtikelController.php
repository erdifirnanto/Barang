<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    function berita () {
        $data = DB::table('artikel')
        ->select('judul', 'isi')
        ->get();
        return $data;
    }
}
