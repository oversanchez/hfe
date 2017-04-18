<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Intranet Rosarina</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">

    {!! HTML::style('lib/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('lib/font-awesome/css/font-awesome.min.css') !!}
    {!! HTML::style('lib/jquery.nanoscroller/css/nanoscroller.css') !!}
    {!! HTML::style('lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') !!}
    {!! HTML::style('lib/bootstrap.switch/css/bootstrap3/bootstrap-switch.min.css') !!}
    {!! HTML::style('lib/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') !!}
    {!! HTML::style('lib/jquery.select2/select2.css') !!}

    {!! HTML::style('lib/bootstrap.slider/css/bootstrap-slider.css') !!}
    {!! HTML::style('lib/bootstrap.daterangepicker/daterangepicker-bs3.css') !!}
    {!! HTML::style('lib/jquery.icheck/skins/square/blue.css') !!}
    {!! HTML::style('lib/jquery.gritter/css/jquery.gritter.css') !!}
    {!! HTML::style('css/style.css') !!}

</head>

<body>
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span
                        class="fa fa-gear"></span></button>
            <a href="#" class="navbar-brand" style="width: 300px;"><span>"Nuestra Señora del Rosario"</span></a></div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="dropdown-submenu"><a href="#">Sub menu</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Académico <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu col-menu-2">
                        <li class="col-sm-6 no-padding">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-group"></i>Matrícula</li>
                                <li><a href="#">Registrar</a></li>
                                <li><a href="#">Estadisticas </a></li>
                                <li><a href="#">Pre-matricula </a></li>

                                <li class="dropdown-header"><i class="fa fa-gear"></i>Config. Académica</li>
                                <li><a href="/mantenimientos/anio_lectivo">Años Lectivos</a></li>
                                <li><a href="/mantenimientos/periodo">Periodos</a></li>
                                <li><a href="/mantenimientos/nivel">Niveles</a></li>
                                <li><a href="/mantenimientos/grado">Grados</a></li>
                                <li><a href="/mantenimientos/seccion">Secciones</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 no-padding">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-legal"></i>Personas</li>
                                <li><a href="#">Alumnos</a></li>
                                <li><a href="#">Docentes</a></li>
                                <li class="dropdown-header"><i class="fa fa-gear"></i>Procesos</li>
                                <li><a href="/mantenimientos/anio_lectivo">Asistencia</a></li>
                                <li><a href="/mantenimientos/periodo">Periodos Académicos</a></li>
                                <li><a href="/mantenimientos/nivel">Niveles Académicos</a></li>
                                <li><a href="/mantenimientos/grado">Grados y Secciones</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img alt="Avatar"
                                                                                    src="assets/img/avatar2.jpg"><span>Jeff Hanneman</span><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right not-nav">
                <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i
                                class="fa fa-comments"></i></a>
                    <ul class="dropdown-menu messages">
                        <li>
                            <div class="nano nscroller">
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="assets/img/avatar2.jpg" alt="avatar"><span
                                                        class="date pull-right">13 Sept.</span><span
                                                        class="name">Daniel</span> I'm following you, and I want your
                                                money!</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/avatar_50.jpg" alt="avatar"><span
                                                        class="date pull-right">20 Oct.</span><span
                                                        class="name">Adam</span> is now following you</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/avatar4_50.jpg" alt="avatar"><span
                                                        class="date pull-right">2 Nov.</span><span
                                                        class="name">Michael</span> is now following you</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/avatar3_50.jpg" alt="avatar"><span
                                                        class="date pull-right">2 Nov.</span><span
                                                        class="name">Lucy</span> is now following you</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="foot">
                                <li><a href="#">View all messages </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i
                                class="fa fa-globe"></i><span class="bubble">2</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="nano nscroller">
                                <div class="content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now
                                                following you <span class="date">2 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-male success"></i><b>Michael</b> is now
                                                following you <span class="date">15 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-bug warning"></i><b>Mia</b> commented on post
                                                <span class="date">30 minutes ago.</span></a></li>
                                        <li><a href="#"><i class="fa fa-credit-card danger"></i><b>Andrew</b> killed
                                                someone <span class="date">1 hour ago.</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="foot">
                                <li><a href="#">View all activity </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="button"><a href="javascript:;" class="speech-button"><i class="fa fa-microphone"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="cl-wrapper">
    <!--Sidebar item function-->
    <!--Sidebar sub-item function-->
    @yield('content')
</div>

{!! HTML::script('lib/jquery/jquery.min.js') !!}
{!! HTML::script('lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js') !!}
{!! HTML::script('js/cleanzone.js') !!}
{!! HTML::script('lib/jquery.gritter/js/jquery.gritter.js') !!}

{!! HTML::script('lib/bootstrap/dist/js/bootstrap.min.js') !!}
{!! HTML::script('lib/jquery.datatables/js/jquery.dataTables.min.js') !!}
{!! HTML::script('lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js') !!}
{!! HTML::script('lib/jquery.select2/select2.min.js') !!}
{!! HTML::script('lib/bootstrap.slider/js/bootstrap-slider.js') !!}
{!! HTML::script('lib/jquery.nestable/jquery.nestable.js') !!}
{!! HTML::script('lib/jquery-ui/jquery-ui.min.js') !!}
{!! HTML::script('lib/bootstrap.switch/js/bootstrap-switch.js') !!}
{!! HTML::script('lib/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
{!! HTML::script('lib/jquery.icheck/icheck.min.js') !!}
{!! HTML::script('lib/moment.js/min/moment.min.js') !!}
{!! HTML::script('lib/bootstrap.daterangepicker/daterangepicker.js') !!}
{!! HTML::script('lib/bootstrap.slider/js/bootstrap-slider.js') !!}
{!! HTML::script('lib/jquery.parsley/dist/parsley.min.js') !!}
{!! HTML::script('lib/jquery.parsley/src/extra/dateiso.js') !!}

@yield('scripts')
<script>

    function grupo_opciones(id){
        var opciones = "<div class='btn-group'>";
        opciones += "<button class='btn btn-default btn-xs' type='button'>Acciones</button>";
        opciones += "<button data-toggle='dropdown' class='btn btn-xs btn-primary dropdown-toggle' type='button' aria-expanded='true'>";
        opciones += "        <span class='caret'></span>";
        opciones += "        <span class='sr-only'>Toggle Dropdown</span>";
        opciones += "</button>";
        opciones += "<ul role='menu' class='dropdown-menu pull-right'>";
        opciones += "<li><a href='#' onclick=editar("+id+")><i class='fa fa-edit'></i> Editar</a></li>";
        opciones += "<li><a href='#' onclick=eliminar("+id+")><i class='fa fa-trash-o'></i> Eliminar</a></li>";
        opciones += "</ul>";
        return opciones;
    }

    function notificacion_html5(title,body){
        if(window.Notification && Notification.permission !== "denied") {
            Notification.requestPermission(function(status) {  // status is "granted", if accepted by user
                var n = new Notification(title, {
                    body: body,
                    icon : '/img/logo - copia.png'
                });
                setTimeout(function(){
                    n.close();
                },2000);
            });
        }
    }
    function notificacion(titulo,texto,clase){
        $.gritter.add({title: titulo, text: texto, class_name: clase});
    }

</script>
</body>
</html>
