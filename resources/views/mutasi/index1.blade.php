@extends('layout.bahagia')

@section('title', 'Tabel Data Mutasi')
@section('judulhalaman', 'Data Mutasi Karyawan PT PWeb A')

@section('konten')
	<a href="/mutasi/tambah"> + Tambah Data Mutasi</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->pegawai_nama }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $mutasi->links() }}

@endsection