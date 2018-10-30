@extends('layouts.app')
@section('title', 'Producto Create')
@section('content')
@include('common.errors')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Productos') }}</div>
                


                 <div class="card-body">
                 {!! Form::open(['route'=>'producto.store','method'=>'POST','files'=>true])!!}
                         @include('producto.form')
                            <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                            {!! Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
                                          </div>
                                   </div>
                {!! Form::close()!!}

                </div>
       
            </div>
        </div>
    </div>
</div>
@endsection
