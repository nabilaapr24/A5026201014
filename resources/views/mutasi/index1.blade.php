<!DOCTYPE html>
<html>
<head>
	<title>Data Mutasi Karyawan PT Pweb A</title>
</head>
<body>

	<h2>Nabila Aprilia</h2>
	<h3>Data Mutasi Karyawan PT Pweb A</h3>

	<a href="/mutasi/tambah"> + Tambah Data Mutasi</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->IDPegawai }}</td>
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


</body>
</html>