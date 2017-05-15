@extends('website.contenido')

@section('body')
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
                    <div role="tabpanel" class="tab-pane active" id="comunicados" style="width:100%;height:178px;background:url('royal/img/comunicado_transparente.png') no-repeat right" >
                        @foreach($comunicados as $key => $comunicado)
                            <div class="row"><div class="col-sm-12"><a href="{{$comunicado->url}}" style="color:{{$comunicado->color}}"><i class="fa fa-bell-o"></i> {{$comunicado->nombre}}</a></div></div>
                        @endforeach
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cartas" style="width:100%;height:178px;background:url('royal/img/documentos_transparente.png') no-repeat right" >
                        @foreach($documentos as $key => $documento)
                            <div class="row"><div class="col-sm-12"><a href="{{$documento->url}}"  style="color:{{$documento->color}}"><i class="fa fa-file-archive-o"></i> {{$documento->nombre}}</a></div></div>
                        @endforeach
                    </div>
                    <div role="tabpanel" class="tab-pane" id="descargas" style="width:100%;height:178px;background:url('royal/img/download_transparente.png') no-repeat right">
                        @foreach($descargas as $key => $descarga)
                            <div class="row"><div class="col-sm-12"><a href="{{$descarga->url}}"  style="color:{{$descarga->color}}"><i class="fa fa-download"></i> {{$descarga->nombre}}</a></div></div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mainContent clearfix">
        <div class="container">
            <div class="row clearfix" style="padding-bottom: 10px;">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12" >
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="border: 1px solid #DCE4EA;border-top: 3px solid #0060b1;padding:0px 10px 10px 10px;    ">
                                        <div class="related_post_sec single_post">
                                            <h3 style="margin: 5px 0px 0px 0px;height: 33px;background-color: #0060b1;color: white;font-size: 20px;width: 100%;padding: 4px 0px 0px 10px;"><img src="royal/img/school.png" style="height: 35px;margin-top: -10px;padding-right: 13px;">Bienvenida</h3>
                                        </div>
                                        <div class="row" style="padding-top: 10px;">
                                            <div class="col-lg-12 col-md-12 col-xs-12 videoLeft">
                                                <iframe src="https://player.vimeo.com/video/216732031?title=0&byline=0&portrait=0" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- videoLeft -->
                                            <div class="col-lg-12 col-md-12 col-xs-12 videoRight">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur
                                                    ante volutpat sem aliquam lobortis..</p>
                                                <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                                            </div>
                                            <!-- videoRight -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="related_post_sec single_post" style="border: 1px solid #DCE4EA;border-top: 3px solid #d4be12;height: 395px;padding-bottom: 60px;padding-right: 4px;">
                                <h3 style="margin: 5px 10px 0px 10px;height: 33px;background-color: #d4be12;color: white;font-size: 20px;width: auto;padding: 4px 0px 0px 10px;"><img src="royal/img/noticias2.png" style="height: 35px;margin-top: -6px;padding-right: 13px;">Noticias</h3>
                                <div id="noticias" class="nano">
                                    <div class="overthrow nano-content">
                                        <ul>
                                            @foreach($noticias as $key => $noticia)
                                                <li title="{{$noticia->nombre}}">
                                        <span class="rel_thumb">
                                                <a href="noticias/{{$noticia->id}}/ver" ><img src="{{$noticia->url_foto}}"
                                                                                              alt=""></a>
                                        </span>
                                                    <!--end rel_thumb-->
                                                    <div class="rel_right">
                                                        <h4><a href="noticias/{{$noticia->id}}/ver">{{str_limit($noticia->nombre,57)}}</a></h4>
                                                        <div class="meta">
                                                            <span class="date">Fecha: <a href="#">{{$noticia->fecha}}</a></span>
                                                        </div>
                                                        <p>{{str_limit($noticia->descripcion,140)}}</p>
                                                    </div>
                                                    <!--end rel right-->
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="border: 1px solid #DCE4EA;border-top: 3px solid #d4be12;height: 192px;padding-bottom: 60px;padding-right: 4px;margin-top: 10px;">
                                <h3 style="text-transform: uppercase;margin: 5px 10px 0px 10px;height: 33px;background-color: #d4be12;color: white;font-size: 20px;width: auto;padding: 4px 0px 0px 10px;"><img src="royal/img/photo.png" style="height: 41px;margin-top: -10px;padding-right: 6px;">FOTOS DESTACADAS<a href="#" style="display:inline;float:right;margin-top: 4px;margin-right: 10px;font-size:18px;"><i class="fa fa-photo"></i> Ver todas las fotos</a></h3>
                                <div class="photo_gallery custom" style="padding: 10px 10px 0px 10px;">
                                    <ul class="gallery popup-gallery">
                                        @foreach($fotos as $key => $foto)
                                            <li style="text-align: center;">
                                                <a href="{{$foto->archivo}}" title="{{$foto->nombre}}">
                                                    <img style="height: 120px;width: auto;" src="{{$foto->archivo}}" alt="{{$foto->nombre}}">
                                                    <div class="overlay">
                                              <span class="zoom">
                                                <i class="fa fa-search"></i>
                                              </span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                            <div class="selectBox clearfix" style="margin-bottom: 0px;">
                                <select class="form-control" style="width: 83%;display: inline-block;">
                                    <option value="0">SECUNDARIA - 1A</option>
                                    <option value="1">SECUNDARIA - 2A</option>
                                    <option value="2">SECUNDARIA - 2B</option>
                                </select>
                                <button type="submit" class="btn btn-default commonBtn" style="width: 15%;margin-top: -4px;"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <img class="img-responsive" src="royal/img/playstore.png" style="cursor:pointer;">
                    <!-- formArea -->
                    <div class="list_block related_post_sec" style="height: 314px;margin: 10px 0 5px;padding:15px 5px 5px 5px;">
                        <div class="upcoming_events" style="height: 241px;">
                            <h3 style="margin:-10px 0px 5px 0px;height: 33px;background-color: #d4be12;color: white;font-size: 20px;width: 100%;padding: 4px 0px 0px 10px;"><img src="royal/img/eventos4.png" style="height: 30px;margin-top: -4px;padding-right: 13px;">Eventos</h3>
                            <div id="eventos" class="nano">
                                <div class="overthrow nano-content">
                                    <ul>
                                        @foreach($eventos as $evento)
                                            <li class="related_post_sec single_post" title="{{$evento->nombre}}">
                                                <span class="date-wrapper">
                                                <span class="date"><span>{{date("d", strtotime($evento->fecha))}}</span>{{date("M", strtotime($evento->fecha))}}</span>
                                                </span>
                                                <div class="rel_right">
                                                    <h4><a href="/eventos/{{$evento->id}}/ver">{{$evento->nombre}}</a></h4>
                                                    <div class="meta">
                                                        <span class="place"><i class="fa fa-map-marker"></i>{{$evento->lugar}}</span>
                                                        <span class="event-time"><i class="fa fa-clock-o"></i>{{$evento->hora}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
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
                                <img src="royal/img/about/SARA-LISBON_Art-Student.jpg" alt="" draggable="false">
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
                        <h3>¿Por qué nosotros?</h3>
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
                        <a href="#"><img src="royal/img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand2.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand3.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand4.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand5.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand2.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand3.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand4.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand5.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand1.png"/></a>
                    </li>
                    <li>
                        <a href="#"><img src="royal/img/home/brand2.png"/></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

