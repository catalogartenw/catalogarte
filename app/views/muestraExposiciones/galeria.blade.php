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
                <span class="title">Galer&iacute;a</span>
                <span class="subtitle">Fotos y videos</span>
            </div>
            <!-- ENDS title -->


            <!-- gallery-->
            <ul id="portfolio-list" class="gallery three-cols">
                <?php foreach ($galeria->item as $item) { ?>

                    <li class="pink">
                        <?php
                        $src = "";
                        if ($item->tipo == "video") {
                            ?>
                            <a href="{{$item->video}}"
                               rel="prettyPhoto[group1]" 
                               title="{{$item->nombre}}">
                                <img src="{{asset($item->url)}}" alt="{{$item->nombre}}">
                            </a>
                        <? } else if ($item->tipo == "imagen") { ?>
                            <a href="{{asset($item->url)}}"
                               rel="prettyPhoto[group1]" 
                               title="{{$item->nombre}}">
                                <img src="{{asset($item->url)}}" alt="{{$item->nombre}}">
                            </a>
                        <? }
                        ?>                        
                    </li>

                <? } ?>
            </ul>
            <!-- ENDS gallery -->

        </div>
        <!-- ENDS content -->

    </div>
    <!-- ENDS wrapper-main -->
</div>
<!-- ENDS MAIN -->
@stop
