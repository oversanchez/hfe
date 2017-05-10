<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I.E. Nuestra Señora del Rosario</title>
    <link rel="icon" type="image/png" href="royal/img/favicon.png">
    {!! HTML::style('royal/css/bootstrap/bootstrap.min.css') !!}
    {!! HTML::style('royal/css/plugins/select_option1.css') !!}
    {!! HTML::style('royal/fonts/font-awesome/css/font-awesome.min.css') !!}
    {!! HTML::style('royal/css/plugins/flexslider.css') !!}
    {!! HTML::style('royal/css/plugins/fullcalendar.min.css') !!}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
{!! HTML::style('royal/options/optionswitch.css') !!}
{!! HTML::style('royal/css/plugins/animate.css') !!}
{!! HTML::style('royal/css/plugins/magnific-popup.css') !!}
{!! HTML::style('royal/css/style.css') !!}
{!! HTML::style('royal/css/colors/default.css') !!}
{!! HTML::style('royal/css/plugins/nanoscroller.css') !!}

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="bodyColor container">
<div class="main_wrapper">
    <div class="topbar clearfix">
        <div class="container">
            <ul class="topbar-right">
                <li class="dropdown top-search list-inline">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-search"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <form action="http://themes.iamabdus.com/royal/1.2/courses.html" method="post">
                            <input type="text" placeholder="Dime que buscas" id="txtBuscar" class="form-control">
                            <button class="btn btn-default commonBtn" type="submit">Buscar</button>
                        </form>
                    </ul>
                </li>
                <li class="dropdown language">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-globe"></i>EN
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="#">English </a>
                        </li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Russian</a></li>
                        <li><a href="#">German</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="topbar-right" style="margin-right: 150px;">
                <li class="phoneNo hidden-xs hidden-sm"><i class="fa fa-phone"></i>0123 45678910</li>
                <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
                    <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_inner">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#main-nav" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand logo clearfix" href="index.html"><img src="/royal/img/logo.png" alt=""
                                                                                             class="img-responsive"/></a>
                            </div>
                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    @foreach($opciones as $opc1)
                                        @if($opc1->opcion_superior_id == null)
                                            @if($opc1->tipo == "B")
                                                <li class="apply_now" ><a href="{{$opc1->url}}">{{$opc1->nombre}}</a></li>
                                            @else
                                                @if($opc1->nro_opciones > 0)
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                           aria-haspopup="true" aria-expanded="false">{{$opc1->nombre}}</a>
                                                        <ul class="dropdown-menu">
                                                            @foreach($opciones as $opc2)
                                                                @if($opc1->id == $opc2->opcion_superior_id)
                                                                    @if($opc2->nro_opciones > 0)
                                                                        <li class="dropdown">
                                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                               aria-haspopup="true" aria-expanded="false">{{$opc2->nombre}}</a>
                                                                            <ul class="dropdown-menu">
                                                                                @foreach($opciones as $opc3)
                                                                                    @if($opc2->id == $opc3->opcion_superior_id)
                                                                                        <li><a href="{{$opc3->url}}">{{$opc3->nombre}}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @else
                                                                        <li><a href="{{$opc2->url}}">{{$opc2->nombre}}</a></li>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li><a href="{{$opc1->url}}">{{$opc1->nombre}}</a></li>
                                                @endif
                                            @endif

                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>
        <!-- navbar -->
    </div>

    @yield('body')

    <div class="menuFooter clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-3 col-xs-6">
                    <ul class="menuLink clearfix">
                        <li><a href="about.html">About Royal College</a></li>
                        <li><a href="campus.html">About Campus</a></li>
                        <li><a href="stuff.html">Staff Members</a></li>
                        <li><a href="about.html">Why Choose Us?</a></li>
                    </ul>
                </div>
                <!-- col-sm-3 col-xs-6 -->
                <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                    <ul class="menuLink clearfix">
                        <li><a href="course-fullwidth.html">All Courses</a></li>
                        <li><a href="buying-steps.html">Admission</a></li>
                        <li><a href="photo-gallery3col.html">Photo Gallery</a></li>
                        <li><a href="international_students.html">International Students</a></li>
                    </ul>
                </div>
                <!-- col-sm-3 col-xs-6 -->
                <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                    <div class="footer-address">
                        <h5>Location:</h5>
                        <address>
                            Royal College
                            <br> 1727 Lombard St.
                            <br> San Francisco
                        </address>
                        <a href="contact-us.html"><span class="place"><i
                                        class="fa fa-map-marker"></i>Main Campus</span></a>
                    </div>
                </div>
                <!-- col-sm-3 col-xs-6 -->
                <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                    <div class="socialArea clearfix">
                        <h5>Find us on:</h5>
                        <ul class="list-inline ">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <!-- social -->
                    <div class="contactNo clearfix">
                        <h5>Call us on:</h5>
                        <h3>012-3434-456768</h3>
                    </div>
                    <!-- contactNo -->
                </div>
                <!-- col-sm-3 col-xs-6 -->
            </div>
            <!-- row clearfix -->
        </div>
        <!-- container -->
    </div>
    <!-- menuFooter -->
    <div class="footer clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-6 col-xs-12 copyRight">
                    <p>© 2016 Copyright Royal College Bootstrap Template by <a
                                href="http://www.iamabdus.com/">Abdus</a></p>
                </div>
                <!-- col-sm-6 col-xs-12 -->
                <div class="col-sm-6 col-xs-12 privacy_policy">
                    <a href="contact-us.html">Contact us</a>
                    <a href="privacy-policy.html">Privacy Policy</a>
                </div>
                <!-- col-sm-6 col-xs-12 -->
            </div>
            <!-- row clearfix -->
        </div>
        <!-- container -->
    </div>
    <!-- footer -->
</div>
<!-- JQUERY SCRIPTS -->
{!! HTML::script('royal/js/jquery.min.js') !!}
{!! HTML::script('royal/js/bootstrap/bootstrap.min.js') !!}
{!! HTML::script('royal/js/plugins/jquery.flexslider.js') !!}
{!! HTML::script('royal/js/plugins/jquery.selectbox-0.1.3.min.js') !!}
{!! HTML::script('royal/js/plugins/jquery.magnific-popup.js') !!}
{!! HTML::script('royal/js/plugins/waypoints.min.js') !!}
{!! HTML::script('royal/js/plugins/jquery.counterup.js') !!}
{!! HTML::script('royal/js/plugins/wow.min.js') !!}
{!! HTML::script('royal/js/plugins/navbar.js') !!}
{!! HTML::script('royal/js/plugins/moment.min.js') !!}
{!! HTML::script('royal/js/plugins/fullcalendar.min.js') !!}
{!! HTML::script('royal/js/plugins/jquery.nanoscroller.js') !!}
{!! HTML::script('royal/js/plugins/overthrow.min.js') !!}
{!! HTML::script('royal/options/optionswitcher.js') !!}
{!! HTML::script('royal/js/custom.js') !!}

<script>
    $(document).on('ready',function(){
        $(".nano").nanoScroller();
    });
</script>
</body>
</html>

