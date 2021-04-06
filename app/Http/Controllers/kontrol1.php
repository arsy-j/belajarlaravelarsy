<?php
namespace App\Http\Controllers;

use illuminate\Http\Request;

class kontrol1 extends Controller

{
    //ini untuk kontrol 1
    public function index(){
        //return "halo anda sedang melihat index kontrol1";
        //return "method untuk mengambil semua data user";
        $nama = "Mohammad Arsy Jahfal";
        $pelajaran = ["Pemrograman lanjut Teknik Komputer","Fisika teknik Teknik Komputer", "PKN Teknik komputer"];
        return view('rumah', compact('nama', 'pelajaran'));
    }
    public function create(){
        return "method untuk membuat data user lewat form";
    }
    public function edit($id){
        return "method untuk mengedit salah satu
        data user lewat form dengan id-". $id;
    }
}