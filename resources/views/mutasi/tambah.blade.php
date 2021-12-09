@extends('layout.bahagia')

	@section('title', 'Menambah Data Mutasi')
	@section('judulhalaman', 'Tambah Data Mutasi')

	@section('konten')
	<a href="/mutasi"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="col-sm-2 label-control">Nama Pegawai</label>
            <select name="idpegawai" >
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Departemen</label>
            <input type="text" name="dept" required="required", pattern="{,30}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Sub Departemen</label>
            <input type="text" name="subdept" required="required", pattern="{,20}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Mulai Bertugas</label>
            <input type="datetime-local" name="mulaibertugas" required="required">
        </div>
		<br>
		<input class="btn-primary" type="submit" value="Simpan Data">
	</form>
	@endsection