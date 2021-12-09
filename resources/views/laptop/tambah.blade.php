@extends('layout.bahagia')

	@section('title', 'Menambah Data Laptop')
	@section('judulhalaman', 'Tambah Data Ketersediaan Laptop')

	@section('konten')
	<a href="/laptop"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/laptop/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="col-sm-2 label-control">Merk Laptop</label>
            <input type="text" name="merk" required="required", pattern="{,30}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Stock Laptop</label>
            <input type="number" name="stock" required="required">
        </div>
		<br>
		<div class="form-group">
                <label class="col-sm-2 label-control">Status</label>
                <input type="radio" id="tersedia" name="tersedia" value="Y">
                <label for="tersedia">Tersedia</label>
                <input type="radio" id="habis" name="tersedia" value="N">
                <label for="habis">Tidak Bisa Dipesan</label><br>
        </div>
		<input class="btn-primary" type="submit" value="Simpan Data">
	</form>
	@endsection