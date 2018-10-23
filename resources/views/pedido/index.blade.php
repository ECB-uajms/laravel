@extends('layouts.create')

@section('title', 'Lista de Pedido')

@section('content')

<form class='form-control' method='POST' action="/pedido">
		@csrf
	<div class="form-group">
		<label for="">Nombre de la pedido</label>
		<input type="text" name='name' class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Guardar Nueva</button>
	
</form>
@endsection