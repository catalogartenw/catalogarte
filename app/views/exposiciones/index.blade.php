@extends('layouts.aceAdmin')

@section('page-title-area')
<p>Listado de Exposiciones</p>
@stop

@section('page-content-area')

<a class="btn btn-lg btn-success" 
   href="{{ URL::to('admin/exposiciones/create') }}">
    Nueva Exposici&oacute;n
</a>
<br/>
<br/>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <!--<td>ID</td>-->
            <td>Nombre</td>
            <td>Periodo</td>
            <td>Sala</td>
            <td>Tipo Hoja</td>
            <td>Presentaci&oacute;n</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($exposiciones as $key => $value)
        <tr>
            <!--<td>{{ $value->id }}</td>-->
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->inicio }} al {{ $value->fin }}</td>
            <td>{{ $value->sala }}</td>
            <td>{{ $value->tipo_hoja }}</td>
            <td>{{ $value->presentacion }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td style="width: 30%; text-align: center">
                {{ Form::open(array('url' => 'admin/exposiciones/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-xs btn-danger')) }}
                {{ Form::close() }}                
                <a class="btn btn-xs btn-info" 
                   href="{{ URL::to('admin/exposiciones/' . $value->id . '/edit') }}">Editar</a>
                <a class="btn btn-xs btn-warning" 
                   href="{{ URL::to('admin/exposiciones/' . $value->id . '/edit') }}">Diseñar</a>
                <a class="btn btn-xs btn-success" 
                   href="{{ URL::to('admin/exposiciones/' . $value->id . '/edit') }}">Publicar</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop