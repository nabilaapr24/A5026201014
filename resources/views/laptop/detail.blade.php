@extends('layout.bahagia')
@section('title', 'Melihat Detail Laptop')
@section('judulhalaman', 'Detail Data Laptop')

@section('konten')
	<a href="/laptop"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($laptop as $l)
    <form action="/laptop/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->kodelaptop }}"> <br/>
		<label>Merk Laptop</label> {{ $l->merklaptop }} <br/>
		<label>Stock</label> {{ $l->stocklaptop }} <br/>
		<label>Ketersediaan</label> {{ $l->tersedia }} <br/>
	</form>
	@endforeach
		
@endsection