@extends('layout.bahagia')
@section('title', 'Laptop Toko PWEB')
@section('judulhalaman', 'Data Ketersediaan Laptop Toko PWEB')

@section('konten')
	<a href="/laptop/tambah"> + Tambah Data Laptop</a>
	
	<br/>
    </br>

    <div class="container" align="center">
	<form action="/laptop/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Laptop berdasarkan merk" value="{{ old('cari') }}">
		<input type="submit" class="btn btn-default" value="CARI">
	</form>
	</div>

	<br/>

	<table border="1">
		<tr>
			<th>Merk</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($laptop as $l)
		<tr>
			<td>{{ $l->merklaptop }}</td>
			<td>{{ $l->tersedia}}</td>
			<td>
                <a href="/laptop/view/{{ $l->kodelaptop }}">Lihat Detail</a>
				|
                <a href="/laptop/edit/{{ $l->kodelaptop }}">Edit</a>
				|
				<a href="/laptop/hapus/{{ $l->kodelaptop }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $laptop->links() }}

@endsection