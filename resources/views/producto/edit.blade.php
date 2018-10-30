@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Productos') }}</div>


                   <div class="card-body">

                  {!! Form::model($producto,['route'=>['producto.update',$producto],'method'=>'PUT','files'=>true])!!}
                  @csrf
                         @include('producto.form')
                            <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                            {!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                                          </div>
                                   </div>
                {!! Form::close()!!}

                </div> 

            </div>
        </div>
    </div>
</div>
@endsection
