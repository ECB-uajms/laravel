@extends('layouts.create')

@section('title', 'Nueva pedido')

@section('content')

<form class='form-control' method='POST' action="/pedido">
		@csrf

	<div class="form-group">
		<label for="">Nombre del pedido</label>
		<input type="text" name='name' class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	
</form>
@endsection