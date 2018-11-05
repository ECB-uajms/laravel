@extends('layouts.app')

@section('title', 'Carrito de compras')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
	</div>
	@if(count($cart))
	<P><a href="{{route('cart-trash')}}" class="btn btn-danger"> Vaciar Carrito<i class="fa fa-trash"></i></a></P>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Quitar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
				<tr>
					<td><img src="/images/{{$item->image}}" height="200px" width="150px"></td>
					<td>{{$item->name}}</td>
					<td>{{$item->precio}}</td>
					<td>
						<input type="number" min="1" max="100" value="{{$item->cantidad}}" id="product_{{$item->id}}">
						<a class="btn btn-warning btn-update-item" 
						href="#"
						data-href="{{route('cart-update',$item->slug)}}"
						data-id={{$item->id}}
							> 
							<i class="fa fa-refresh"></i>
						</a>

						</td>
					<td>{{$item->precio * $item->cantidad}}</td>
					<td><a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger">
						<i class="fa fa-remove"></i>
					</a></td>
				</tr>
				@endforeach
			</tbody>



		</table>
	</div>
	@else
			<h3><span class="label label-warning"> Tu carrito esta vacio :( </span> </h3>
	@endif
	<hr><p>
		<a href="{{route('home')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i> Seguir Comprando
		</a>
		<a href="{{route('home')}}" class="btn btn-primary">
			Checkout <i class="fa fa-chevron-circle-right"></i> 
		</a>
	</p>

</div>
@endsection