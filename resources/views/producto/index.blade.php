@extends('layouts.create')

@section('title', 'Lista de Docente')

@section('content')

<form class='form-control' method='POST' action="/producto">
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" class="form-control">
		
	</div>
	<button type="submit" class="btn btn-primary">Guardar Nuevo</button>
	
</form>
@endsection