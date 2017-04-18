<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clean Zone</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">

{!! HTML::style('lib/bootstrap/dist/css/bootstrap.min.css') !!}
{!! HTML::style('lib/font-awesome/css/font-awesome.min.css') !!}
{!! HTML::style('lib/jquery.nanoscroller/css/nanoscroller.css') !!}
{!! HTML::style('css/style.css') !!}
<!--if lt IE 9script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')-->
</head>

<body class="texture">
<div id="cl-wrapper" class="login-container">
    <div class="middle-login">
        <div class="block-flat">
            <div class="header">
                <h3 class="text-center">Intranet Rosarina</h3></div>
            <div>
                <form id="frmLogin" action="login" style="margin-bottom: 0px !important;" class="form-horizontal">
                    <div class="content">
                        <h4 class="title">Identifícate</h4>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="txtUsuario" type="text" placeholder="Usuario" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group"><span class="input-group-addon"><i
                                                class="fa fa-lock"></i></span>
                                    <input id="txtClave" type="password" placeholder="Clave" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="foot">
                        <button data-dismiss="modal" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center out-links"><a href="#">© 2013 Your Company</a></div>
    </div>
</div>
{!! HTML::script('lib/jquery/jquery.min.js') !!}
{!! HTML::script('lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js') !!}
{!! HTML::script('js/cleanzone.js') !!}
{!! HTML::script('lib/bootstrap/dist/js/bootstrap.min.js') !!}

<script type="text/javascript">
    $(document).ready(function () {
        //initialize the javascript
        App.init();

        $("#frmLogin").on('submit',function(e){
            e.preventDefault();
            var usuario = $("#txtUsuario").val();
            var clave = $("#txtClave").val();
            $.ajax({
                url: "/Anio_Academico/iniciar_sesion", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: {"opcion" : "L"}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                beforeSend: function() {  // Custom XMLHttpRequest
                    $("#loading").show();
                },      // To send DOMDocument or non processed data file it is set to false
                success: function(data){
                    $("#dvTabla").html(data);
                    $('#tabla').DataTable();
                },
                complete : function(){
                    $("#loading").hide();
                }
            });
        });
    });
</script>
</body>
</html>
