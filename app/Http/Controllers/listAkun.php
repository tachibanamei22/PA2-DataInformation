<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class listAkun extends Controller
{
    public function index()
    {
        //get data akun
        $akun = DB::table('daftar_akun')->orderBy('harga_akun','desc')->get();

        //send data ke view index
        return view('index',['daftar_akun' => $akun]);
    }

    // method untuk menampilkan view form tambah akun
    public function add()
    {

        // memanggil view tambah
        return view('add');

    }

    // method untuk insert data ke table akun
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('daftar_akun')->insert([
            'nama_akun' => $request->nama,
            'jenis_akun' => $request->jenis,
            'grade_akun' => $request->grade,
            'harga_akun' => $request->harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/list');

    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $list = DB::table('daftar_akun')->where('id_akun',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['list' => $list]);
    
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('daftar_akun')->where('id_akun',$request->id)->update([
            'nama_akun' => $request->nama,
            'jenis_akun' => $request->jenis,
            'grade_akun' => $request->grade,
            'harga_akun' => $request->harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/list');
    }

    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('daftar_akun')->where('id_akun',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/list');
    }
}
