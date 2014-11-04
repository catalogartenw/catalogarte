<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
                <span class="title">&Iacute;ndice</span>
                <span class="subtitle">Tabla de contenidos</span>
            </div>
            <!-- ENDS title -->

            <!-- page-content -->
            <div id="page-content">

                <!-- left col -->
                <div class="one-half">

                    <?php foreach ($indice->elemento as $elemento) { ?>
                        <p class="info-box">
                            <img src="{{asset('muestra/img/mono-icons/arrowright32.png')}}" 
                                 alt="{{$elemento['nombre']}}" 
                                 title="{{$elemento['nombre']}}" 
                                 class="alignleft" />
                            {{$elemento['nombre']}}
                            <br/><br/>
                            <?php foreach ($elemento->children() as $subElemento) { ?>
                            <div class="lists-plus">
                                <ul>
                                    <li>{{$subElemento['nombre']}}</li>
                                </ul>
                            </div>
                        <? }
                        ?>
                        </p>
                        <br/>
                    <? }
                    ?>
                </div>
                <!--ENDS left col-->

                <!-- right col -->
                <div class="one-half last"></div>

            </div>
            <!--ENDS page-content-->

        </div>
        <!--ENDS content-->
    </div>
    <!--ENDS wrapper-main-->
</div>
<!--ENDS MAIN-->


@stop