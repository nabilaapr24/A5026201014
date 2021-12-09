
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $a->ID }}">
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
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD hh:mm:ss',
                            showTodayButton: false,
                            locale : 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script>
                <div class="form-group">
                    <label class="col-sm-2 label-control">Status</label>
                    <input type="radio" id="hadir" name="status" value="H" @if ($a->Status === "H" ) checked="checked" @endif>
                    <label for="hadir">Hadir</label><br>
                    <input type="radio" id="izin" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                    <label for="izin">Izin</label><br>
                    <input type="radio" id="sakit" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                    <label for="sakit">Sakit</label><br>
                    <input type="radio" id="alpha" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                    <label for="alpha">Alpha</label>
                </div>
                
                <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen"> Kembali</a></p>
   @endsection
