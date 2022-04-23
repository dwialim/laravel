@extends('layouts.left')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data distributor</h3>
					<div class="card-tools">
						<a href="#" class="btn btn-success btn-sm waves-effect waves-light">Create Distributor</a>
					</div>
				</div>
				<div class="card-body p-0">
					<table class="table table-striped">
						<thead style="text-align: center;">
							<tr>
								<!-- <th style="width: 10px">#</th> -->
								<th>ID</th>
								<th>Address</th>
								<th>longitude</th>
								<th>latitude</th>
								<th colspan="2">Action</th>
								<!-- <th style="width: 40px">Label</th> -->
							</tr>
						</thead>
						<tbody style="text-align:center;">
							<tr>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td>abc</td>
								<td><a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Update</a></td>
								<td><a href="#" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection