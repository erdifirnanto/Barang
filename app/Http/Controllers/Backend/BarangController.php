<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function BarangView(){
        $data['allDataBarang']=barang::all();
        return view('backend.barang.view_barang',$data);
        // return view('backend.barang.view_barang');
        

}
    public function BarangViewDeskripsi($id){ 
        $dataD=Barang::find($id);
        return view('backend.barang.deskripsi_barang', compact('dataD'));
}
}