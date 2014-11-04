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
                <span class="title">Hoja Legal</span>
                <span class="subtitle">{{$hojalegal->museo}}</span>
            </div>
            <!-- ENDS title -->

            <!-- page-content -->
            <div id="page-content">

                <div class="one-half">
                    <h4 class="line-divider">{{$hojalegal->museo}}</h4>
                    <h1></h1>
                    <p>{{$hojalegal->ubicacion}}</p>
                    <p style="text-align: justify">
                        {{$hojalegal->infomuseo}}
                    </p>
                </div>
                <!-- ENDS  Headers -->

                <!-- Lists -->
                <div class="one-half last">

                    <!-- Dropcaps -->
                    <h4 class="line-divider">Exposici&oacute;n</h4>                    
                    <p class="dropcap dark">{{$hojalegal->exposicion}}</p>
                    <br/>
                    <p style="text-align: justify">Per&iacute;odo {{$hojalegal->periodo}}</p>
                    <p style="text-align: justify">Autor {{$hojalegal->autor}}</p>
                    <!-- ENDS Dropcaps -->                    
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
