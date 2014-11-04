@extends('layouts.nova')

@section('page-title-area')

@stop

@section('page-content-area')
<!-- MAIN -->
<div id="main">
    <!-- wrapper-main -->
    <div class="wrapper">


        <!-- content -->
        <div id="content">

            <!-- title -->
            <div id="page-title">
                <span class="title">Art&iacute;culos</span>
                <span class="subtitle">M&aacute;s informaci&oacute;n</span>
            </div>
            <!-- ENDS title -->

            <!-- page-content -->
            <div id="page-content">

                <div class="accordion">
                    <?php foreach ($articulos->articulo as $articulo) { ?>
                    <h6><a href="#">{{$articulo->nombre}}</a></h6>
                    <div>
                        <p>
                            {{$articulo->info}}
                        </p>
                    </div>
                    <? } ?>
                </div>

            </div>
            <!-- ENDS page-content -->

        </div>
        <!-- ENDS content -->
    </div>
    <!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->
@stop