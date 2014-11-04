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
                <span class="title">Notas</span>
                <span class="subtitle">{{$notas->exposicion}}</span>
            </div>
            <!-- ENDS title -->

            <!-- Posts -->
            <div id="posts">

                <!-- post -->
                <div class="post">
                    <h1><a href="#">{{$notas->exposicion}}</a></h1>
                    <div class="n-comments">165</div>

                    <!-- shadow -->
                    <div class="thumb-shadow">

                        <!-- post-thumb -->
                        <div class="post-thumbnail">
                            <!-- meta -->
                            <ul class="meta">
                                <li><strong>Publicada</strong> 10 Oct 2014 </li>
                                <li><strong>Por</strong> <a href="#">Autor</a></li> 
                                <!--<li> <strong>Posted in</strong> 
                                    <div class="meta-tags">
                                        <a href="#">Webdesign</a>
                                        <a href="#">Code</a>
                                        <a href="#">Photo</a>
                                    </div>
                                </li>-->
                            </ul>
                            <!-- ENDS meta -->
                            <a href="{{ URL::to('muestra/exposiciones/notas') }}" class="cover">
                                <img src="{{asset($notas->imagen)}}"
                                     alt="Notas" />
                            </a>
                        </div>
                        <!-- ENDS post-thumb -->

                        <div style="text-align: justify" class="the-excerpt">
                            <?php foreach ($notas->info as $info) { ?>
                                {{$info}}
                                <br/>
                                <br/>
                            <? } ?>
                        </div>

                    </div>
                    <!-- ENDS shadow -->
                </div>
                <!-- ENDS post -->

            </div>
            <!-- ENDS Posts -->	

        </div>
        <!-- ENDS content -->

    </div>
    <!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->
@stop
