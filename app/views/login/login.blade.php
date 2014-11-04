<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Login - Catalogarte Admin</title>

        <meta name="description" content="User login page" />
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

    <body style="background-color: #22ad4b" class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <img src="{{asset('images/logoinicial.png')}}" 
                                         width="100%" height="50px" />
                                </h1>
                                <h4 class="white-opaque" 
                                    id="id-company-text">AppWeb © 2014-2015</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Ingresa tus datos
                                            </h4>

                                            <div class="space-6"></div>
                                            {{ HTML::ul($errors->all()) }}
                                            <!--{{ Form::open(array('url' => '/')) }}-->
                                            <form action="{{ action('LoginController@store') }}" method="POST">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            {{ Form::text('login', Input::old('login'),
                                                            array('class' => 'form-control', 'placeholder' => 'Usuario')) }}
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            {{ Form::password('password',
                                                            array('class' => 'form-control', 'placeholder' => 'Contrase&ntilde;a')) }}
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="space-4"></div>
                                                    <div style="text-align: right">
                                                        {{ Form::submit('Entrar', array('class' => 'btn btn-primary')) }}
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div><!-- /.widget-main -->

                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                            </div><!-- /.position-relative -->

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
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
                $(document).on('click', '.toolbar a[data-target]', function(e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });



            //you don't need this, just used for changing background
            jQuery(function($) {
                $('#btn-login-dark').on('click', function(e) {
                    $('body').attr('class', 'login-layout');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-light').on('click', function(e) {
                    $('body').attr('class', 'login-layout light-login');
                    $('#id-text2').attr('class', 'grey');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-blur').on('click', function(e) {
                    $('body').attr('class', 'login-layout blur-login');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        </script>
    </body>
</html>
