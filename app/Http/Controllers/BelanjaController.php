<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function indexbelanja()
    {
    	// mengambil data dari table 
        $belanja = DB::table('keranjangbelanja')->paginate(); //membuat paginate di halaman

    	// mengirim data ke view index
    	return view('belanja.indexbelanja',['belanja' => $belanja]);

    }

// method untuk hapus data 
public function hapus($id)
{
	// menghapus data belanjaan berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$id)->delete();
		
	// alihkan halaman ke halaman belanja
	return redirect('/belanja');
}

// method untuk menampilkan view form tambah data
public function tambah()
{

	// memanggil view tambah
	return view('belanja.tambah');

}

public function store(Request $request)
{
    // insert data ke table 
    DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->kode,
        'Jumlah' => $request->jumlah,
        'Harga' => $request->harga
    ]);
    // alihkan halaman ke halaman belanja
    return redirect('/belanja');

} 
}