@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data obat</h3>
					<div class="card-tools">
						<a href="{{url('/obat/create')}}" class="btn btn-success btn-sm waves-effect waves-light">Add Data Obat</a>
					</div>
				</div>
				<div class="card-body p-0">
					<table class="table table-striped">
						<thead style="text-align: center;">
							<tr>
								<!-- <th style="width: 10px">#</th> -->
								<th>Kode</th>
								<th>Nama</th>
								<th>Satuan</th>
								<th>Harga</th>
								<th>Stock</th>
								<th colspan="3">Action</th>
								<!-- <th style="width: 40px">Label</th> -->
							</tr>
						</thead>
						<tbody style="text-align:center;">
							@foreach($data as $key => $p)
							<tr>
								<td>{{$p->kode_obat}}</td>
								<td>{{$p->nama_obat}}</td>
								<td>{{$p->satuan_obat}}</td>
								<td>{{$p->harga_obat}}</td>
								<td>{{$p->stock_obat}}</td>
								<td><a href="{{route('updateform',$p->id_obat)}}" class="btn btn-primary btn-sm waves-effect waves-light">Update</a></td>
								<td><a href="{{route('delete',$p->id_obat)}}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a></td>
								<td><a href="{{route('transaksi',$p->id_obat)}}" class="btn btn-warning btn-sm waves-effect waves-light">Transaksi</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection