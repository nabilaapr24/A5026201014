<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
    public function indexlaptop()
    {
    	// mengambil data dari table 
        $laptop = DB::table('laptop')->paginate(1); //membuat paginate di halaman

    	// mengirim data ke view index
    	return view('laptop.indexlaptop',['laptop' => $laptop]);

    }

   // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('laptop.tambah');

}

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('laptop')->insert([
            'merklaptop' => $request->merk,
            'stocklaptop' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman laptop
        return redirect('/laptop');

    }    

    // method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('laptop.edit',['laptop' => $laptop]);

}

   // method untuk view data pegawai
   public function detail($id)
   {
	   // mengambil data pegawai berdasarkan id yang dipilih
	   $laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
	   // passing data pegawai yang didapat ke view detail.blade.php
	   return view('laptop.detail',['laptop' => $laptop]);
   
   }

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('laptop')->where('kodelaptop',$request->id)->update([
		'merklaptop' => $request->merk,
		'stocklaptop' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/laptop');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('laptop')->where('kodelaptop',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/laptop');
}

//method untuk cari data pegawai
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$laptop = DB::table('laptop')
		->where('merklaptop','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('laptop.indexlaptop',['laptop' => $laptop]);
 
	}

}