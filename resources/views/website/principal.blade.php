<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Royal College Responsive Template</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
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
{!! HTML::style('royal/') !!}
{!! HTML::style('royal/') !!}
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
                                <a class="navbar-brand logo clearfix" href="index.html"><img src="royal/img/logo.png" alt=""
                                                                                             class="img-responsive"/></a>
                            </div>
                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li class="dropdown list-inline">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Courses</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Courses Grid View</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="course-grid-3col.html">3 Columns</a></li>
                                                    <li><a href="course-grid-4col.html">4 Columns</a></li>
                                                    <li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Courses List View</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="course-right-sidebar.html">Sidebar Right</a></li>
                                                    <li><a href="course-left-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="course-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Single Course</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="single-course-right-sidebar.html">Sidebar Right</a>
                                                    </li>
                                                    <li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="single-course-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Buy Course</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="buying-steps.html">Payment</a></li>
                                                    <li><a href="buying-confirmation.html">Confirmation </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">PAGES</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About College</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
                                                    <li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Apply Now</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="buying-steps.html">Apply For Addmission</a></li>
                                                    <li><a href="buying-confirmation.html">Confirmation</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false">Prices Table</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="price-table-3col.html">Prices 3 column</a></li>
                                                    <li><a href="price-table-4col.html">Prices 4 column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="campus.html">Our Campus</a></li>
                                            <li><a href="stuff.html">Stuff</a></li>
                                            <li><a href="international_students.html">International Students</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="404-error.html">404 Not Found</a></li>
                                            <li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">BLOG</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Sidebar Left</a></li>
                                            <li><a href="single-post-right-sidebar.html">Single Post Sidebar Right</a>
                                            </li>
                                            <li><a href="single-post-left-sidebar.html">Single Post Sidebar Left</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="events-3col.html">Events 3 Columns</a></li>
                                            <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                                            <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                                            <li><a href="single-events.html">Single Event</a></li>
                                            <li><a href="events-calendar.html">Events Callender</a></li>
                                        </ul>
                                    </li>
                                    <li class="apply_now"><a href="buying-steps.html">Apply Now</a></li>
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
    <div class="row">
        <div class="col-sm-7">
            <div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
                <div class="slides carousel-inner">
                @foreach($sliders as $key => $slider)
                    <?php
                        $active = "";
                        if($key == 0)
                            $active = " active";
                    ?>
                    <div class="item {{$active}}">
                        <img src="{{ $slider->url_foto }}" alt=""/>
                        <div class="banner_caption">
                            <div class="container" style="max-width: 700px;">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="caption_inner animated fadeInUp">
                                            <h3 style="padding: 3px 0px 5px 10px;color:white;display:inline;">{{ $slider->nombre }}</h3>
                                            @if ($slider->descripcion != "")
                                                <p>{{$slider->descripcion}}</p>
                                            @endif
                                            @if ($slider->url_vinculo !== "" && $slider->url_vinculo !== "#")
                                                <a style='display:inline;float:right;' target='_blank'
                                                   href='{{$slider->url_vinculo}}'>{{$slider->nombre_vinculo}}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end container-->
                        </div>  <!--end banner_caption-->
                    </div>
                @endforeach
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel"
                   data-slide="prev">
                    <img src="royal/img/home/slider/prev.png">
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel"
                   data-slide="next">
                    <img src="royal/img/home/slider/next.png">
                </a>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="tab-container" style="margin:10px 0px 0px 0px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#comunicados" aria-controls="comunicados" role="tab" data-toggle="tab"><i class="fa fa-volume-up"></i> Comunicados</a></li>
                    <li role="presentation"><a href="#cartas" aria-controls="cartas" role="tab" data-toggle="tab"><i class="fa fa-file"></i> Documentos</a></li>
                    <li role="presentation"><a href="#descargas" aria-controls="descargas" role="tab" data-toggle="tab"><i class="fa fa-download"></i> Descargas</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content" style="background: white;height:192px;padding:10px;border:solid thin lightgray;">
                    <div role="tabpanel" class="tab-pane active" id="comunicados" style="width:100%;height:225px;filter:alpha(opacity=25);-moz-opacity:.25;opacity:.25;background:url('royal/img/comunicados.png') no-repeat right" >
                        <ul>
                            <li><h5>Comunicado 1</h5></li>
                            <li><h5>Comunicado 2</h5></li>
                            <li><h5>Comunicado 3</h5></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cartas" style="width:100%;height:225px;filter:alpha(opacity=25);-moz-opacity:.25;opacity:.25;background:url('royal/img/documentos2.png') no-repeat right" >
                        sdkfldkasdasd
                    </div>
                    <div role="tabpanel" class="tab-pane" id="descargas" style="width:100%;height:225px;filter:alpha(opacity=25);-moz-opacity:.25;opacity:.25;background:url('royal/img/download.png') no-repeat right">
                        ...
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mainContent clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-4 col-xs-12">
                    <div class="videoNine clearfix">
                        <div class="videoArea clearfix">
                            <h3>Bienvenidos a "Nuestra Señora del Rosario"</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 videoLeft">
                                    <img src="royal/img/home/video_image.jpg"
                                         data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                                </div>
                            </div>
                            <div class="row">
                                <!-- videoLeft -->
                                <div class="col-lg-12 col-md-12 col-xs-12 videoRight">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur
                                        ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat.
                                        Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.
                                        Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu
                                        vitae, mattis sollicitudin lectus.</p>
                                    <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                                </div>
                                <!-- videoRight -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- videoArea -->
                    </div>
                    <!--videoNine-->
                </div>
                <div class="col-sm-5 col-xs-12" style="border: 1px solid #DCE4EA;border-top: 3px solid #d4be12;">
                    <div class="related_post_sec single_post">
                        <h3 style="margin: 5px 0px 0px 0px;height: 33px;background-color: #d4be12;color: white;font-size: 20px;width: 100%;padding: 4px 0px 0px 10px;"><img src="royal/img/noticias2.png" style="height: 35px;margin-top: -6px;padding-right: 13px;">Noticias</h3>
                        <ul>
                            @foreach($noticias as $key => $noticia)
                                <li>
                                        <span class="rel_thumb">
                                                <a href="noticias/id={{$noticia->id}}"><img src="{{$noticia->url_foto}}"
                                                                                            alt=""></a>
                                        </span>
                                    <!--end rel_thumb-->
                                    <div class="rel_right">
                                        <h4><a href="noticias/id={{$noticia->id}}">{{$noticia->nombre}}</a></h4>
                                        <div class="meta">
                                            <span class="author">Posted in: <a href="#">Update</a></span>
                                            <span class="date">on: <a href="#">January 24, 2015</a></span>
                                        </div>
                                        <p>{{str_limit($noticia->descripcion,170)}}</p>
                                    </div>
                                    <!--end rel right-->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- col-sm-8 col-xs-12 -->
                <div class="col-sm-3 col-xs-12">
                    <div class="formArea clearfix">
                        <div class="formTitle">
                            <img src="royal/img/hay_tarea.png">
                            <h5>Selecciona tu sección</h5>
                        </div>
                        <!-- formTitle -->
                        <form action="#" method="post">
                            <div class="selectBox clearfix">
                                <select class="form-control" style="width: 90%;display: inline-block;">
                                    <option value="0">SECUNDARIA - 1A</option>
                                    <option value="1">SECUNDARIA - 2A</option>
                                    <option value="2">SECUNDARIA - 2B</option>
                                </select>
                                <button type="submit" class="btn btn-default commonBtn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- formArea -->
                    <div class="list_block related_post_sec">
                        <div class="upcoming_events">
                            <h3 style="margin:-10px 0px 5px 0px;height: 33px;background-color: #d4be12;color: white;font-size: 20px;width: 100%;padding: 4px 0px 0px 10px;"><img src="royal/img/eventos2.png" style="height: 35px;margin-top: -6px;padding-right: 13px;">Eventos</h3>
                            <ul>
                                @foreach($eventos as $evento)
                                    <li class="related_post_sec single_post">
                                        <span class="date-wrapper">
                                        <span class="date"><span>24</span>January</span>
                                        </span>
                                        <div class="rel_right">
                                            <h4><a href="single-events.html">Offered in small class sizes with great
                                                    emphasis...</a></h4>
                                            <div class="meta">
                                                    <span class="place"><i
                                                                class="fa fa-map-marker"></i>Main Campus</span>
                                                    <span class="event-time"><i
                                                                class="fa fa-clock-o"></i>11.00 pm</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="events-3col.html" class="btn btn-default btn-block commonBtn">More Events</a>
                        </div>
                    </div>
                    <!-- end list_block -->
                </div>
                <!-- col-sm-4 col-xs-12 -->

            </div>
            <!-- row clearfix -->
        </div>
        <!-- container -->
    </div>
    <!-- count -->
    <div class="testimonial-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="testimonial">
                        <div class="carousal_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris</p>
                        </div>
                        <div class="carousal_bottom">
                            <div class="thumb">
                                <img src="img/about/SARA-LISBON_Art-Student.jpg" alt="" draggable="false">
                            </div>
                            <div class="thumb_title">
                                <span class="author_name">Sara Lisbon</span>
                                <span class="author_designation">Student<a href="#"> English Literature</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial -->
                </div>
                <!-- col-xs-12 -->
                <div class="col-xs-12 col-sm-6">
                    <div class="features">
                        <h3>Why Choose Us?</h3>
                        <ul>
                            <li><i class="fa fa-check-circle-o"></i>It’s a complete solution for your college
                                website
                            </li>
                            <li><i class="fa fa-check-circle-o"></i>PSD file included to help you customize the
                                design better
                            </li>
                            <li><i class="fa fa-check-circle-o"></i>SASS file included for unlimited hasel free
                                style customization
                            </li>
                            <li><i class="fa fa-check-circle-o"></i>Theme option switcher for live cusomization
                                preview
                            </li>
                            <li><i class="fa fa-check-circle-o"></i>24/7 Support</li>
                        </ul>
                    </div>
                </div>
                <!-- col-xs-12 -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- testimonial-section -->
    <div class="brand-section clearfix">
        <div class="container">
            <div class="brand-slider flexslider">
                <ul class="slides">
                    <li>
                        <a href="#"><img src="img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand2.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand3.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand4.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand5.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand2.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand3.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand4.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand5.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/home/brand2.png"/></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- brand-section -->
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
{!! HTML::script('royal/options/optionswitcher.js') !!}
{!! HTML::script('royal/js/custom.js') !!}
</body>
</html>
