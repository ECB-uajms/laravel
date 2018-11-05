@extends('layouts.app')

@section('title', 'Producto')

@section('content')
@include('common.sucess')
<div class="row">
	<div class="col-md-6">
			
			<img class="card-img-top mx-auto d-block" 
			src="/images/{{$producto->image}}" 	height="800px" width="600px" style="  background-color: #EFEFEF; margin:8px;" alt="">
			
		</div>
	<div class="col-md-4 text-center">

			<h1 class="card-tittle">{{$producto->name}}</h1>
				<h3 class="card-tittle">Precio : {{$producto->precio}} $</h3>

				<h4 class="card-tittle">En Stock : {{$producto->cantidad}}</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				
				<a href="/producto/{{$producto->slug}}/edit" class="btn btn-secondary"> Editar</a>
				<a href="/cart/add/{{$producto->slug}}" class="btn btn-primary"> Comprar</a>
				{!!Form::open(['route'=>['producto.destroy',$producto->slug],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
				
		</div>
	</div>

@endsection