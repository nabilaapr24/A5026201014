@extends('layout.bahagia')

	@section('title', 'Menambah List Keranjang')
	@section('judulhalaman', 'Tambah Data Keranjang Belanja')

	@section('konten')
	<a href="/belanja"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/belanja/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="col-sm-2 label-control">Kode Barang</label>
            <input type="text" name="kode" required="required", pattern="{,30}">
        </div>
		<br>
		<div class="form-group">
            <label class="col-sm-2 label-control">Jumlah Pembelian</label>
            <input type="text" name="jumlah" required="required">
        </div>
		<br>
        <div class="form-group">
            <label class="col-sm-2 label-control">Harga per item</label>
            <input type="text" name="harga" required="required">
        </div>
		<br>
		<input class="btn-primary" type="submit" value="Simpan Data">
	</form>
	@endsection