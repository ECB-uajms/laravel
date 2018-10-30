@extends('layouts.app')

@section('title', 'Producto')

@section('content')

	
			<img class="card-img-top mx-auto d-block" 
			src="/images/{{$producto->image}}" height="800px" width="600px"	 style=" background-color: #EFEFEF; margin:8px;" alt="">
				<div class="text-center">
				<h5 class="card-tittle">{{$producto->name}}</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="/producto/{{$producto->slug}}/edit" class="btn btn-primary"> Editar</a>
				</div>
				

@endsection