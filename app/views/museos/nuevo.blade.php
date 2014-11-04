@extends('layouts.aceAdmin')

@section('page-title-area')
<div class="page-header">
    <h1>
        Nuevo Museo
    </h1>
</div><!-- /.page-header -->


@stop

@section('page-content-area')
{{ HTML::ul($errors->all()) }}

<!--{{ Form::open(array('url' => 'admin/museos'), 
array('class' => 'form-horizontal')) }}-->
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" method="POST"
              action="{{ URL::to('admin/museos') }}" >
            <!-- #section:elements.form -->
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="siglas"> Siglas </label>

                <div class="col-sm-9">
                    <input type="text" id="siglas" name="siglas"
                           class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="nombre"> Nombre </label>

                <div class="col-sm-9">
                    <input type="text" id="nombre" name="nombre"
                           class="col-xs-10 col-sm-9" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="ubicacion"> Ubicaci&oacute;n </label>

                <div class="col-sm-9">
                    <textarea name="ubicacion" class="col-xs-10 col-sm-9"
                              id="ubicacion"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="telefono"> Tel&eacute;fono </label>

                <div class="col-sm-9">
                    <input type="text" id="nombre" name="telefono"
                           class="col-xs-10 col-sm-9" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="logotipo"> Logotipo </label>

                <div class="col-sm-9">
                    <div id="mulitplefileuploader">Adjuntar</div>
                </div>
            </div>

            <br/>

            <div style="text-align: center" class="form-group">
                {{ Form::submit('Guardar', array('class' => 'btn btn-success')) }}
                <a class="btn btn-warning" 
                   href="{{ URL::to('admin/museos') }}">
                    Cancelar
                </a>
            </div>

            <!--{{ Form::close() }}-->
        </form>
    </div>
</div>
@stop