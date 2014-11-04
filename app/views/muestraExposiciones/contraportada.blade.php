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
                <span class="title">Contraportada</span>
                <span class="subtitle">{{$contraportada->exposicion}}</span>
            </div>
            <!-- ENDS title -->

            <!-- page-content -->
            <div id="page-content">

                <img src="{{asset($contraportada->rutaimagen)}}" 
                     width="100%"
                     height="100%"
                     border="0" />                

            </div>
            <!-- ENDS page-content -->

        </div>
        <!-- ENDS content -->
    </div>
    <!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->

@stop
