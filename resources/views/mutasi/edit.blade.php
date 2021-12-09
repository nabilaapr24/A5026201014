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
            <input type="text" required="required" name="dept" value="{{ $m->Departemen }}",  pattern="{,30}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">SubDepartemen</label>
            <input type="text" required="required" name="subdept" value="{{ $m->SubDepartemen }}",  pattern="{,20}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Mulai Bertugas</label>
            <input type="datetime-local" name="mulaibertugas" required="required" value="{{ $m->SubDepartemen }}">
        </div>
		<br>
		<input class="btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach
		
@endsection