@extends('layouts.app')

@section('title', 'Producto')

@section('content')
@include('common.sucess')
<div class="row">
	@foreach($producto as $producto)

	<div class="col-sm">
		<div class="card text-center" style="width: 18rem;">
			<img class="card-img-top mx-auto d-block" 
			src="images/{{$producto->image}}" style=" height=500px; width=400px;background-color: #EFEFEF; margin:8px;" alt="">
				<div class="card-body">
				<h5 class="card-tittle">{{$producto->name}}</h5>
					<p class="card-text">{{$producto->precio}}</p>
						
						<a href="/producto/{{$producto->slug}}" class="btn btn btn-info"> Ver mas...</a>
						<a href="/cart/add/{{$producto->slug}}" class="btn btn btn-primary"> Comprar</a>
				</div>
		</div>
	</div>

	@endforeach
</div>

@endsection