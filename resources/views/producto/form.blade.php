
<div class="form-group row">
	{!! Form::label('name','Nombre',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::text('name',null ,['class'=>'form-control'])!!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('slug','Slug',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::text('slug',null ,['class'=>'form-control'])!!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('detalle','Detalle',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::text('detalle',null ,['class'=>'form-control'])!!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('image','Imagen',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::file('image')!!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('precio','precio',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::number('precio',null,['class'=>'form-control'])!!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('cantidad','Cantidad',['class'=>'col-md-4 col-form-label text-md-right'])!!}
	<div class="col-md-6">
	{!! Form::number('cantidad',null ,['class'=>'form-control'])!!}
	</div>
</div>

