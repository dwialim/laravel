@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data transaksi</h3>
					<!-- <div class="card-tools">
					</div> -->
				</div>
				<div class="card-body p-0">
					<table class="table table-striped">
						<thead style="text-align: center;">
							<tr>
								<th>Kode Obat</th>
								<th>Nama Obat</th>
								<th>Harga Obat</th>
								<th>Jumlah Beli</th>
								<th>Total</th>
								<th>Tanggal</th>
								<th>Action</th>
							</tr>
						</thead>
						@foreach($data as $board)
						@foreach($board->transaksi as $yay)
						<tbody style="text-align:center;">
							<tr>
								<td>{{$yay->kode_obat}}</td>
								<td>{{$board->nama_obat}}</td>
								<td>{{$board->harga_obat}}</td>
								<td>{{$yay->total_barang}}</td>
								<td>{{$yay->total_harga}}</td>
								<td>{{$yay->created_at}}</td>
								<td><a href="{{route('destroy',$yay->id)}}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a></td>
								<td><a href="{{route('cetak',$yay->id)}}" target="_blank" class="btn btn-primary btn-sm waves-effect waves-light">Cetak</a></td>
								<!-- <a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
							</tr>
						</tbody>
					@endforeach
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection