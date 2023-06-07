<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cumtroller extends Controller
{
    //
    public function shidded(){
        $data = DB::table('bazinga')->get();
        return view('laragon_test.home', ['data' => $data]);
    }

    public function d_create(){
        return view('laragon_test.create');
    }

    public function create(Request $request){
        DB::table('bazinga')->insert([
            'nama_barang' => $request->nama_b,
            'stok' => $request->stok,
            'harga_barang' => $request->harga_b,
        ]);
        return redirect('aaa');
    }

    public function d_update($id_barang){
        $data = DB::table('bazinga')->where('id_barang', $id_barang)->get();
        return view('laragon_test.update', ['data' => $data]);
    }

    public function update(Request $request){
        
        DB::table('bazinga')->where('id_barang', $request->id)->update([
            'nama_barang' => $request -> nama_barang,
            'stok' => $request -> stok_barang,
            'harga_barang' => $request -> harga_barang,
        ]);
        return redirect('aaa');
    }

    public function delete($id_barang){
        DB::table('bazinga')->where('id_barang', $id_barang)->delete();
        return redirect('aaa');
    }
}
