<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>@yield('title', 'Catalogarte')</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        {{ HTML::style('assets/css/uploadfile.css', array('media' => 'screen')) }}

        <!-- bootstrap & fontawesome -->
        {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
        {{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen')) }}

        <!-- page specific plugin styles -->
        @section('aditional-css')
        @show

        <!-- text fonts -->
        {{ HTML::style('assets/css/ace-fonts.css', array('media' => 'screen')) }}

        <!-- ace styles -->
        {{ HTML::style('assets/css/ace.min.css', array('media' => 'screen','id' => 'main-ace-style')) }}

        <!--[if lte IE 9]>
  {{ HTML::style('assets/css/ace-part2.min.css', array('media' => 'screen')) }}
        <![endif]-->

        {{ HTML::style('assets/css/ace-skins.min.css', array('media' => 'screen')) }}
        {{ HTML::style('assets/css/ace-rtl.min.css', array('media' => 'screen')) }}

        <!--[if lte IE 9]>
{{ HTML::style('assets/css/ace-ie.min.css', array('media' => 'screen')) }}
        <![endif]-->

        <!-- inline styles related to this page -->



        <!-- ace settings handler -->
        {{ HTML::script('assets/js/ace-extra.min.js') }}


        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
{{ HTML::script('assets/js/html5shiv.min.js') }}
{{ HTML::script('assets/js/respond.min.js') }}
        <![endif]-->
    </head>

    <body class="no-skin">
        <!-- #section:basics/navbar.layout -->
        <div id="navbar" class="navbar navbar-default">
            <!-- START NAVBAR -->
            @include('layouts.aceAdminNavBar')
            <!-- END NAVBAR -->
        </div>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <!-- #section:basics/sidebar -->
            <div id="sidebar" class="sidebar responsive">
                <!-- START SIDEBAR -->
                @include('layouts.aceAdminSideBar')
                <!-- END SIDEBAR -->
            </div>

            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <!-- START BREADCRUMBS -->
                    @include('layouts.aceAdminBreadcrumbs')
                    <!-- END BREADCRUMBS -->
                </div>
                <!-- /section:basics/content.breadcrumbs -->

                <div class="page-content">
                    <!-- START SETTINGS BOX -->
                    <!--include('layouts.aceAdminSettingsBox')-->
                    <!-- END START SETTINGS BOX -->


                    <div class="page-content-area">

                        @section('page-title-area')
                        contenido...
                        @show


                        @section('page-content-area')
                        contenido...
                        @show
                    </div><!-- /.page-content-area -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->

            <div class="footer">
                @include('layouts.aceAdminFooter')
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/catalogarte/public/assets/js/jquery.min.js'>" + "<" + "/script>");
            window.jQuery || document.write("<script src='/catalogarte/public/assets/js/jquery.uploadfile.min.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='/catalogarte/public/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='/catalogarte/public/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>

        {{ HTML::script('assets/js/bootstrap.min.js') }}

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
{{ HTML::script('assets/js/excanvas.min.js') }}
        <![endif]-->
        {{ HTML::script('assets/js/jquery-ui.custom.min.js') }}
        {{ HTML::script('assets/js/jquery.ui.touch-punch.min.js') }}
        {{ HTML::script('assets/js/jquery.easypiechart.min.js') }}
        {{ HTML::script('assets/js/jquery.sparkline.min.js') }}
        {{ HTML::script('assets/js/flot/jquery.flot.min.js') }}
        {{ HTML::script('assets/js/flot/jquery.flot.pie.min.js') }}
        {{ HTML::script('assets/js/flot/jquery.flot.resize.min.js') }}

        @section('aditional-script')

        @show

        <!-- ace scripts -->
        {{ HTML::script('assets/js/ace-elements.min.js') }}
        {{ HTML::script('assets/js/ace.min.js') }}

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {


                var settings = {
                    url: "{{asset('upload.php')}}",
                    dragDrop: true,
                    fileName: "myfile",
                    allowedTypes: "jpg,png,gif,doc,pdf,zip",
                    returnType: "json",
                    onSuccess: function(files, data, xhr) {
                        alert(("Imagen cargada.."));
                    },
                    showDelete: true,
                    deleteCallback: function(data, pd)
                    {
                        for (var i = 0; i < data.length; i++) {
                            $.post("delete.php", {op: "delete", name: data[i]},
                            function(resp, textStatus, jqXHR) {
                                //Show Message  
                                $("#status").append("<div>File Deleted</div>");
                            });
                        }
                        pd.statusbar.hide(); //You choice to hide/not.

                    }
                }
                var uploadObj = $("#mulitplefileuploader").uploadFile(settings);

                $('.easy-pie-chart.percentage').each(function() {
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size / 10),
                        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                        size: size
                    });
                })

                $('.sparkline').each(function() {
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                            {
                                tagValuesAttribute: 'data-values',
                                type: 'bar',
                                barColor: barColor,
                                chartRangeMin: $(this).data('min') || 0
                            });
                });


                //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
                //but sometimes it brings up errors with normal resize event handlers
                $.resize.throttleWindow = false;

                var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
                var data = [
                    {label: "social networks", data: 38.7, color: "#68BC31"},
                    {label: "search engines", data: 24.5, color: "#2091CF"},
                    {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
                    {label: "direct traffic", data: 18.6, color: "#DA5430"},
                    {label: "other", data: 10, color: "#FEE074"}
                ]
                function drawPieChart(placeholder, data, position) {
                    $.plot(placeholder, data, {
                        series: {
                            pie: {
                                show: true,
                                tilt: 0.8,
                                highlight: {
                                    opacity: 0.25
                                },
                                stroke: {
                                    color: '#fff',
                                    width: 2
                                },
                                startAngle: 2
                            }
                        },
                        legend: {
                            show: true,
                            position: position || "ne",
                            labelBoxBorderColor: null,
                            margin: [-30, 15]
                        }
                        ,
                        grid: {
                            hoverable: true,
                            clickable: true
                        }
                    })
                }
                drawPieChart(placeholder, data);

                /**
                 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                 so that's not needed actually.
                 */
                placeholder.data('chart', data);
                placeholder.data('draw', drawPieChart);


                //pie chart tooltip example
                var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                var previousPoint = null;

                placeholder.on('plothover', function(event, pos, item) {
                    if (item) {
                        if (previousPoint != item.seriesIndex) {
                            previousPoint = item.seriesIndex;
                            var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                            $tooltip.show().children(0).text(tip);
                        }
                        $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
                    } else {
                        $tooltip.hide();
                        previousPoint = null;
                    }

                });






                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }

                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }

                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }


                var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
                $.plot("#sales-charts", [
                    {label: "Domains", data: d1},
                    {label: "Hosting", data: d2},
                    {label: "Services", data: d3}
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: {show: true},
                        points: {show: true}
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: {colors: ["#fff", "#fff"]},
                        borderWidth: 1,
                        borderColor: '#555'
                    }
                });


                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }


                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });


                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                    $('#tasks').on('touchstart', function(e) {
                        var li = $(e.target).closest('#tasks li');
                        if (li.length == 0)
                            return;
                        var label = li.find('label.inline').get(0);
                        if (label == e.target || $.contains(label, e.target))
                            e.stopImmediatePropagation();
                    });

                $('#tasks').sortable({
                    opacity: 0.8,
                    revert: true,
                    forceHelperSize: true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize: true,
                    tolerance: 'pointer',
                    stop: function(event, ui) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
                    if (this.checked)
                        $(this).closest('li').addClass('selected');
                    else
                        $(this).closest('li').removeClass('selected');
                });


                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
                    var offset = $(this).offset();

                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                        $(this).addClass('dropup');
                    else
                        $(this).removeClass('dropup');
                });

            })
        </script>

        <!-- the following scripts are used in demo only for onpage help and you don't need them -->
        {{ HTML::style('assets/css/ace.onpage-help.css', array('media' => 'screen')) }}
        {{ HTML::style('docs/assets/js/themes/sunburst.css', array('media' => 'screen')) }}

        <script type="text/javascript"> ace.vars['base'] = '..';</script>
        {{ HTML::script('assets/js/ace/elements.onpage-help.js') }}
        {{ HTML::script('assets/js/ace/ace.onpage-help.js') }}
        {{ HTML::script('docs/assets/js/rainbow.js') }}
        {{ HTML::script('docs/assets/js/language/generic.js') }}
        {{ HTML::script('docs/assets/js/language/html.js') }}
        {{ HTML::script('docs/assets/js/language/css.js') }}
        {{ HTML::script('docs/assets/js/language/javascript.js') }}
    </body>
</html>
