<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$mutasi = DB::table('mutasi')->get();
		$mutasi = DB::table('mutasi')
       ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('mutasi.*', 'pegawai.pegawai_nama')
       ->paginate() ;

    	// mengirim data pegawai ke view index
    	return view('mutasi.index1',['mutasi' => $mutasi]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// mengambil data dari table pegawai
	$pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
	// memanggil view add
	return view('mutasi.tambah', ['pegawai' => $pegawai]);
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('mutasi')->insert([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->dept,
		'SubDepartemen' => $request->subdept,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	// alihkan halaman ke halaman mutasi
	return redirect('/mutasi');

}

// method untuk edit data pegawai
public function edit($id)
{
	 // mengambil data absen berdasarkan id yang dipilih
	 $mutasi = DB::table('mutasi')->where('ID', $id)->get();

	 // mengambil data dari table pegawai
	 $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

	 $judul = "Hallo Apa kabar" ;

	 // passing data absen yang didapat ke view update.blade.php
	 return view('mutasi.edit', ['mutasi' => $mutasi,'pegawai' => $pegawai , 'judul' => $judul]);

	//$mutasi = DB::table('mutasi')->where('ID',$id)->get();
	//return view('mutasi.edit',['mutasi' => $mutasi]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('mutasi')->where('ID',$request->id)->update([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->dept,
		'SubDepartemen' => $request->subdept,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mutasi');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('mutasi')->where('ID',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/mutasi');
}

}