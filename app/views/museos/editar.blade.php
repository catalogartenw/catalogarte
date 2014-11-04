@extends('layouts.aceAdmin')

@section('page-title-area')
<p>Editar Museo</p>
@stop

@section('page-content-area')
{{ HTML::ul($errors->all()) }}

{{ Form::model($museo, array('route' => array('admin.museos.update',
$museo->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('siglas', 'Siglas') }}
    {{ Form::text('siglas', Input::old('siglas'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('ubicacion', 'Ubicaci&oacute;n') }}
    {{ Form::text('ubicacion', Input::old('ubicacion'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('telefono', 'Tel&eacute;fono') }}
    {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
</div>

<label>Logotipo</label>
<div id="mulitplefileuploader">Adjuntar</div>

<br/>

{{ Form::submit('Editar', array('class' => 'btn btn-success')) }}
<a class="btn btn-warning" 
   href="{{ URL::to('admin/museos') }}">
    Cancelar
</a>

{{ Form::close() }}
@stop