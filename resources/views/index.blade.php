@extends('layouts.principal')

@section('title')
	Blog Laravel Express
@stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="well">
				<h3>Menu</h3>
			</div>
			
		</div>
		<div class="col-md-9">
			<h1>Posts</h1>
			@foreach( $artigos as $art )
				<div class="panel panel-default">
				  <div class="panel-heading"><strong>{{ $art['title'] }}</strong></div>
				  <div class="panel-body">
				    {{$art['post']}}
				  </div>
				</div>
			@endforeach
		</div>
	</div>
	

@stop