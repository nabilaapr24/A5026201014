@extends('layout.bahagia')

	@section('title', 'Menambah Data Mutasi')
	@section('judulhalaman', 'Tambah Data Mutasi')

	@section('konten')
	<a href="/mutasi"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="dept" required="required", pattern="{,30}"> <br/>
		Sub Departemen <input type="text" name="subdept" required="required", pattern="{,20}"> <br/>
		Mulai Bertugas <input type="datetime-local" name="mulaibertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endsection