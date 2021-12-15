@extends('layout.bahagia')
@section('title', 'Keranjang Belanja')
@section('judulhalaman', 'List Belanjaan di Keranjang')

@section('konten')
	<table border="1">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($belanja as $b)
		<tr>
			<td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang}}</td>
            <td>{{ $b->Jumlah}}</td>
            <td>
                {{ number_format($b->Harga)}}
            </td>
            <td>{{ number_format($b->Jumlah * $b->Harga)}}</td>
			<td>
                <a href="/belanja/tambah/">Beli</a>
				|
				<a href="/belanja/hapus/{{ $b->ID }}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
<script>
    function format(n){
        var myObj = {
        style: "currency",
        currency: "EUR"
        }
        return n.toLocaleString("en-GB", myObj);
    }
</script>
@endsection