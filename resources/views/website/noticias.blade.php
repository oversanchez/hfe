@extends('website.contenido')

@section('body')
    <div class="post_section" style="background-color: white;padding: 15px 0 35px;margin-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 post_left">
                    <div class="post_left_section post_left_border" style="border-right:none;">
                        <div class="post single_post">
                            <h1 style="margin-bottom: 10px;">{{$noticia->nombre}}</h1>
                            <div class="meta" style="border-bottom: none;margin: 0 0 5px;">
                                <span class="author">Hecho por: <a href="#">Colegio Rosario</a></span>
                                <span class="date">Fecha de publicación: <a href="#">{{$noticia->fecha}}</a></span>
                            </div><!--end meta-->
                            <div class="post_desc" style="font-size:16px;">
                                {{$noticia->descripcion}}
                            </div>
                            <div class="post_thumb">
                                <img src="{{$noticia->url_foto}}" alt="">
                            </div><!--end post thumb-->
                            <!--end post thumb-->
                            <div class="post_desc">

                                 {!! $noticia->contenido  !!}
                            </div><!--end post desc-->
                        </div><!--end post-->
                    </div><!--end post left section-->
                </div><!--end post_left-->

                <div class="col-xs-12 col-sm-4 post_right">
                    <div class="related_post_sec">

                        <div class="list_block">
                            <h3>Latest News</h3>
                            <ul>
                                <li>
										<span class="rel_thumb">
											<img src="img/news/rel_thumb.png" alt="">
										</span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4>
                                        </a>
                                        <span class="date">Posted: <a href="#">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
										<span class="rel_thumb">
											<img src="img/news/rel_thumb.png" alt="">
										</span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4>
                                        </a>
                                        <span class="date">Posted: <a href="#">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
										<span class="rel_thumb">
											<img src="img/news/rel_thumb.png" alt="">
										</span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4>
                                        </a>
                                        <span class="date">Posted: <a href="#">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
										<span class="rel_thumb">
											<img src="img/news/rel_thumb.png" alt="">
										</span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4>
                                        </a>
                                        <span class="date">Posted: <a href="#">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
										<span class="rel_thumb">
											<img src="img/news/rel_thumb.png" alt="">
										</span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4>
                                        </a>
                                        <span class="date">Posted: <a href="#">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                            </ul>
                            <a href="#" class="more_post">More</a>
                        </div><!-- end list_block -->
                    </div><!--end related_post_sec-->
                </div><!--end post_right-->
            </div>
        </div>
    </div>
@endsection