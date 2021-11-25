<!DOCTYPE html>
<html>
<head>
	<title>Data Mutasi Pegawai PT Pweb A</title>
</head>
<body>

	<h2><a href="https://my.its.ac.id">MyITS</a></h2>
	<h3>Edit Data Mutasi</h3>

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
		

</body>
</html>