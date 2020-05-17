@extends('navbar')
	@section('viewingpages')
	<div>This is the landing page</div>
	<div class="card">
		<div class="card-body">
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Email</th>
				</tr>
				@foreach($values as $value)
					<tr>
						<td>{{$value->name}}</td>
						<td>{{$value->email}}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	@endsection