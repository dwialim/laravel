@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Transaksi Obat</h3>
				</div>
				@foreach($obat as $p)
				<form action="{{route('createtransaksi')}}" method="post">
					{{csrf_field()}}
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Kode obat</label>
							<input type="hidden" class="form-control" name="id" value="{{$p->id_obat}}">
							<input type="text" class="form-control" name="kode" value="{{$p->kode_obat}}" readonly="true">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nama Obat</label>
							<input type="text" class="form-control" name="nama" value="{{$p->nama_obat}}" readonly="true">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Harga Obat</label>
							<input type="number" class="form-control" name="harga" value="{{$p->harga_obat}}" readonly="true">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Stock Obat</label>
							<input type="text" class="form-control" name="stock" value="{{$p->stock_obat}}" readonly="true">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Jumlah Beli</label>
							<input type="number" class="form-control" name="beli">
						</div>
					</div>

					<div class="card-footer">
						<a href="{{url('/obat')}}" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a>
						<button type="submit" class="btn btn-success btn-sm waves-effect waves-light">Simpan</button>
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection