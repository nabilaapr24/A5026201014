@extends('layout.bahagia')
@section('title', 'Mengubah Data Mutasi')
@section('judulhalaman', 'Edit Data Mutasi')

@section('konten')
	<a href="/mutasi"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="dept" value="{{ $m->Departemen }}",  pattern="{,30}"> <br/>
		SubDepartemen <input type="text" required="required" name="subdept" value="{{ $m->SubDepartemen }}",  pattern="{,20}"> <br/>
        Mulai Bertugas <input type="datetime" name="mulaibertugas" required="required" value="{{ $m->MulaiBertugas}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
@endsection