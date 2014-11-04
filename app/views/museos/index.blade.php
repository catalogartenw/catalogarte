@extends('layouts.aceAdmin')

@section('page-title-area')
<p>Listado de Museos</p>
@stop

@section('page-content-area')

<a class="btn btn-lg btn-success" 
   href="{{ URL::to('admin/museos/create') }}">
    Nuevo Museo
</a>
<br/>
<br/>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <!--<td>ID</td>-->
            <td>Nombre</td>
            <td>Siglas</td>
            <td>Tel&eacute;fono</td>
            <td>Logo</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($museos as $key => $value)
        <tr>
            <!--<td>{{ $value->id }}</td>-->
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->siglas }}</td>
            <td>{{ $value->telefono }}</td>
            <td style="text-align: center">
                <img src="{{asset($value->ruta_logo)}}" width="60px" height="60px"
                     border="0" />
            </td>

            <!-- we will also add show, edit, and delete buttons -->
            <td style="width: 20%; text-align: center">
                {{ Form::open(array('url' => 'admin/museos/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-info" 
                   href="{{ URL::to('admin/museos/' . $value->id . '/edit') }}">Editar</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop