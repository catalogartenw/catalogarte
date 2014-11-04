@extends('layouts.aceAdmin')

@section('page-title-area')
<div class="page-header">
    <h1>
        Nueva Exposici&oacute;n
    </h1>
</div><!-- /.page-header -->
@stop

@section('page-content-area')


{{ HTML::ul($errors->all()) }}

<!--{{ Form::open(array('url' => 'admin/exposiciones')) }}-->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" method="POST"
              action="{{ URL::to('admin/exposiciones') }}" >
            <!-- #section:elements.form -->

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
                       for="inicio"> Inicio </label>

                <div class="col-sm-9">
                    <input type="text" name="inicio" 
                           class="input-mask-date"
                           id="inicio" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="fin"> Fin </label>

                <div class="col-sm-9">
                    <input type="text" name="fin" 
                           class="input-mask-date"
                           id="fin" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="museo"> Museo </label>

                <div class="col-sm-9">
                    <select class="col-xs-12 col-sm-8" 
                            id="museo" name="museo">
                        <option value="-1">Seleccione un museo</option>
                        <option value="1">Museo Nacional de Arte</option>
                        <option value="2">Museo de las Intervenciones</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="sala"> Sala </label>

                <div class="col-sm-9">
                    <input type="text" name="sala"
                           id="fin" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" 
                       for="museo"> Tama&ntilde;o del documento </label>

                <div class="col-sm-9">
                    <select class="col-xs-12 col-sm-8" 
                            id="museo" name="museo">
                        <option value="-1">Selecciona el tipo de documento</option>
                        <option value="1">Carta</option>
                        <option value="2">Oficio</option>
                        <option value="2">A4</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right">Secciones</label>
                <div class="checkbox">
                    <label>
                        <input name="form-field-checkbox" type="checkbox" class="ace" />
                        <span class="lbl"> Portada</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox2" type="checkbox" class="ace" />
                        <span class="lbl"> Hoja Legal</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox2" type="checkbox" class="ace" />
                        <span class="lbl"> &Iacute;ndice</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox2" type="checkbox" class="ace" />
                        <span class="lbl"> Notas del evento</span>
                    </label>                    
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right">&nbsp;</label>    
                <div class="checkbox">
                    <label>
                        <input name="form-field-checkbox2" type="checkbox" class="ace" />
                        <span class="lbl"> Art&iacute;culos especializados</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox3" class="ace ace-checkbox-2" type="checkbox" />
                        <span class="lbl"> Im&aacute;genes</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox3" class="ace ace-checkbox-2" type="checkbox" />
                        <span class="lbl"> Contraportada</span>
                    </label>
                </div>
            </div>

            <!-- /section:custom/checkbox -->

            <br/>

            <div style="text-align: center" class="form-group">
                {{ Form::submit('Guardar', array('class' => 'btn btn-success')) }}
                <a class="btn btn-warning" 
                   href="{{ URL::to('admin/exposiciones') }}">
                    Cancelar
                </a>
            </div>

            <!--{{ Form::close() }}-->
        </form>
    </div>
</div>
<!--{{ Form::close() }}-->
@stop