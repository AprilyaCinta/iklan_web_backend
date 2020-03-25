<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
class IklanController extends Controller
{
    //

    public function index(){


        $iklan=Iklan::all();

        $data=['iklan'=>$iklan];

        return $data;
    }

    public function create(Request $request){

        $iklan=new Iklan();
        $iklan->judul          = $request->judul;
        $iklan->deskripsi      = $request->deskripsi;
        $iklan->kategori       = $request->kategori;
        $iklan->kontak_pemilik = $request->kontak_pemilik;
        $iklan->harga          = $request->harga;
        $iklan->save();

        return "Data Tersimpan";
    }

    public function update(request $request, $id){

        $iklan=Iklan::find($id);
        $iklan->judul          = $request->judul;
        $iklan->deskripsi      = $request->deskripsi;
        $iklan->kategori       = $request->kategori;
        $iklan->kontak_pemilik = $request->kontak_pemilik;
        $iklan->harga          = $request->harga;
        $iklan->save();

        return "Data Terupdate";
    }

    public function delete($id){

        $iklan=Iklan::find($id);
        $iklan->delete();

        return " Data Terhapus ";
    }

    public function detail($id){

        $iklan=Iklan::find($id);

        return $iklan;
    }
}
