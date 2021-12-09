@extends('layout.bahagia')

@section('title', 'Mengedit Data Laptop')
@section('judulhalaman', 'Edit Data Laptop')

@section('konten')

 @foreach($laptop as $l)
 <form action="/laptop/update" method="post">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $l->kodelaptop }}">
     <div class="form-group">
         <label class="col-sm-2 label-control">Merk Laptop</label>
         <input type="text" required="required" name="merk" value="{{ $l->merklaptop }}">
     </div>
     <br>
     <div class="form-group">
         <label class="col-sm-2 label-control">Stock Laptop</label>
         <input type="number" required="required" name="stock" value="{{ $l->stocklaptop }}">
     </div>
     <br>
    <div class="form-group">
        <label class="col-sm-2 label-control">Tersedia</label>
        <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($l->tersedia === "Y" ) checked="checked" @endif>
        <label for="tersedia">Tersedia</label>
        <input type="radio" id="habis" name="tersedia" value="N" @if ($l->tersedia === "N" ) checked="checked" @endif>
        <label for="habis">Tidak Bisa Dipesan</label><br>
    <div>
             
             <p><input class="btn-primary" type="submit" value="Simpan Data"></p>
 </form>
 @endforeach

<p> <a href="/laptop"> Kembali</a></p>
@endsection
