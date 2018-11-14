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
				<h5 class="card-text">{{$producto->detalle}}</h5>
				
				
				<a href="/producto/{{$producto->slug}}/edit" class="btn btn-secondary"> Editar</a>
				<a href="/cart/add/{{$producto->slug}}" class="btn btn-primary"> Comprar</a>
				{!!Form::open(['route'=>['producto.destroy',$producto->slug],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
				
		</div>
	</div>

@endsection