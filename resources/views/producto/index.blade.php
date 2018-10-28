@extends('layouts.app')

@section('title', 'Producto')

@section('content')
<div class="row">
@foreach($producto as $producto)

<div class="col-sm">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-tittle">{{$producto->name}}</h5>
					<p class="card-text">{{$producto->cantidad}}</p>
						<a href="#" class="btn btn-primary"> GO</a>
	
			</div>
		</div>
	</div>

	@endforeach
@endsection