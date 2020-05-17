@extends('navbar')
  @section('viewingpages')
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h1>Contact Us</h1>
				<p>This is the contact page</p>
				@if( $values)
				<div>
					<p>My name is {{$values[0]->userNicename}}</p>
					<p>You can send me a mail and my email is {{$values[0]->user_email}}</p>
				</div>
				@elseif($error)
					<div>{{$error}}</div>
				@else
					<div>There is nothing to display</div>
				@endif
			</div>
		</div>
	</div>
  @endsection
