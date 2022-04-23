@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Update Data Obat</h3>
				</div>
				@foreach($data as $a)
				<form action="{{route('update')}}" method="post">
					{{csrf_field()}}
					<div class="card-body">
						<div class="form-group">
							<label>Kode obat</label>
							<input type="hidden" name="id_obat" value="{{$a->id_obat}}">
							<input type="text" class="form-control" name="kode" value="{{$a->kode_obat}}">
						</div>
						<div class="form-group">
							<label>Nama Obat</label>
							<input type="text" class="form-control" name="nama" value="{{$a->nama_obat}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Satuan Obat</label>
							<input type="text" class="form-control" name="satuan" value="{{$a->satuan_obat}}">
						</div>
						<div class="form-group">
							<label>Harga Obat</label>
							<input type="number" class="form-control" name="harga" value="{{$a->harga_obat}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Stock Obat</label>
							<input type="text" class="form-control" name="stock" value="{{$a->stock_obat}}">
						</div>
					</div>

					<div class="card-footer">
						<a href="{{url('/obat')}}" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a>
						<button type="submit" class="btn btn-success btn-sm waves-effect waves-light">update</button>
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection