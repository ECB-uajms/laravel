@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="page-header">
       <h1><i class="fa fa-shopping-cart"></i>Detalle del pedido</h1>
    </div>
    <div class="page">
    	<div class="table-responsive">
    		<h3>Datos del usuario</h3>
    		<table class="table table-striped table-hover table-bordered">
    			<tr><td>Nombre:</td><td>{{Auth::user()->name}}</td></tr>	
    			<tr><td>Email:</td><td>{{Auth::user()->email}}</td></tr>	
    			





    		</table>
    	</div>
    	<div class="table-responsive"></div>
    		<h3>Datos del pedido</h3>
    		<table class="table table-striped table-hover table-bordered">
    			<tr>
    			<th>Producto:</th>
    			<th>Precio:</th>
    			<th>Cantidad:</th>
    			<th>Subtotal:</th>
				</tr>	
				@foreach($cart as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td>{{number_format($item->precio,2)}}</td>
					<td>{{$item->cantidad}}</td>
					<td>{{number_format($item->precio * $item->cantidad,2)}}</td>
				</tr>
				@endforeach

    		</table><hr>
    		<h3><p>
		<a href="{{route('cart-show')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
		<a href="{{route('payment')}}" class="btn btn-primary">
			 <i class="fa fa-paypal"></i> 
		</a>
	</p>

    </div>
</div>

@endsection