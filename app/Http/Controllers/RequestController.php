<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function viewPostData()
{
    return view('request.post-data');
}

public function processPostData(Request $request)
{
    echo 'Nama: ' . $request->nama . '<br>';
    echo 'Email: ' . $request->email . '<br>';
    echo 'Password: ' . $request->Password;
}
}
