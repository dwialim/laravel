@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Tambah Data Obat</h3>
				</div>
				<form action="{{route('create')}}" method="post">
					{{csrf_field()}}
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Kode obat</label>
							<input type="text" class="form-control" name="kode">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nama Obat</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Satuan Obat</label>
							<input type="text" class="form-control" name="satuan">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Harga Obat</label>
							<input type="number" class="form-control" name="harga">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Stock Obat</label>
							<input type="text" class="form-control" name="stock">
						</div>
					</div>

					<div class="card-footer">
						<a href="{{url('/obat')}}" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a>
						<button type="submit" class="btn btn-success btn-sm waves-effect waves-light">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection