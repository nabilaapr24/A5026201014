<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mutasi</title>
</head>
<body>

	<h2><a href="my.its.ac.id">MyITS</a></h2>
	<h3>Data Pegawai</h3>

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

</body>
</html>