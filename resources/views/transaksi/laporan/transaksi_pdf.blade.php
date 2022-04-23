<!DOCTYPE html>
<html>
<head>
	<title>Cetak Struk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Struk Transaksi PDF</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Kode Obat</th>
				<th>Total Barang</th>
				<th>Total harga</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $p)
			<tr>
				<td>{{$p->kode_obat}}</td>
				<td>{{$p->total_barang}}</td>
				<td>{{$p->total_harga}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>