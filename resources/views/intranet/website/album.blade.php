@extends('intranet/principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Galería de Fotos</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
            <select onchange="listarFotos()" class="input-lg" id="cmbAlbum"
                    style="width: 500px;margin-left: 20px;"></select>
            <button class="btn btn-default" onclick="editarAlbum()"><i class="fa fa-edit"></i></button>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="tab-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tp1" data-toggle="tab">Todas las fotos</a></li>
                            <li><a href="#tp2" data-toggle="tab">Subir fotos</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tp1" class="tab-pane active cont" style="height: auto;background: lightgray;position: relative;">
                            <div id="dvGaleria" class="gallery-cont" style="height: auto;position: relative;">
                            </div>
                        </div>
                        <div id="tp2" class="tab-pane cont">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        {!! Form::open(['route'=> 'foto.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                                        <div class="dz-message"><h2>Suelta tus fotos aquí o Haz click para buscar</h2>
                                        </div>
                                        <div class="dropzone-previews">

                                        </div>


                                        {!! Form::close() !!}
                                        <button style="margin-top:10px;float: right;" type="submit" class="btn btn-link " id="submit"><h3><i style="font-size:28px;" class="fa fa-upload"></i> Subir Fotos</h3></button>
                                        <a style="margin-top:10px;" class="btn btn-link" style="float:right;margin-top:-10px;" style="display: inline-block;" href="#" onclick="limpiarBandeja()"><h3><i style="font-size:28px;" class="fa fa-ban"></i> Limpiar bandeja de subida</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modAlbum" class="md-modal colored-header primary md-effect-10" style="perspective: none;">
            <div class="md-content">
                <div class="modal-header"><h3>Album</h3>
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
                </div>
                <div class="modal-body form">
                    <form id="frmAlbum" method="post" data-parsley-validate=""
                          data-parsley-excluded="[disabled=disabled]" novalidate="">
                        <input id="hddCodigo_Album" type="hidden" value="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Nombre</label>
                                <input id="txtNombre_Album" type="text" class="form-control"
                                       data-parsley-trigger="change" data-parsley-required="true">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-2"><label for="">Fecha</label></div>
                            <div class="form-group col-md-4">
                                <input id="txtFecha_Album" type="date" class="form-control"
                                       data-parsley-trigger="change" data-parsley-required="true">
                            </div>
                            <div class="form-group col-md-3">
                                <label>
                                    <input id="chkPublico_Album" class="icheck" type="checkbox" checked> Público
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="cancelarAlbum()" class="btn btn-default btn-flat"
                            style="float:left;">Nuevo
                    </button>
                    <button id="btnEliminar_Album" type="button" onclick="eliminarAlbum()"
                            class="btn btn-danger btn-flat" style="float:left;">Eliminar
                    </button>

                    <button type="button" onclick="guardarAlbum()" class="btn btn-primary btn-flat">Guardar</button>
                </div>
            </div>
        </div>
        <div class="md-overlay"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        var t;
        $(document).ready(function () {
            //initialize the javascript
            App.init();
            App.formElements();
            listarAlbum();
            App.pageGallery();
            $("#frmAlbum").parsley();

            Dropzone.options.myDropzone = {
                autoProcessQueue: false,
                acceptedFiles: "image/jpeg,image/png,image/gif",
                uploadMultiple: true,
                maxFilezise: 1,
                maxFiles: 10,

                init: function() {
                    var submitBtn = document.querySelector("#submit");
                    myDropzone = this;

                    submitBtn.addEventListener("click", function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });

                    this.on('sending', function(file, xhr, formData){
                        formData.append('album_id', $("#cmbAlbum").val());
                    });
                    this.on("addedfile", function(file) {
                        //notificacion('Registro', 'Imagen agregada', 'primary');
                    });

                    this.on("complete", function(file) {
                        //myDropzone.removeFile(file);
                        listarFotos();
                    });

                    this.on("success",
                            myDropzone.processQueue.bind(myDropzone)
                    );
                }
            };
        });

        function limpiarBandeja() {
            Dropzone.forElement("#my-dropzone").removeAllFiles(true);
        }

        function cancelarAlbum() {
            $("#hddCodigo_Album").val("");
            $("#txtNombre_Album").val("");
            $("#txtFecha_Album").val("");
            $("#chkPublico_Album").iCheck('check');
            $("#modAlbum .modal-header h3").text("Nuevo álbum");
            $("#btnEliminar_Album").hide();
        }

        function editarAlbum() {
            var id = $("#cmbAlbum").val();
            if (id == "") {
                cancelarAlbum();
                $("#modAlbum").niftyModal('show');
            } else {
                $("#hddCodigo_Album").val(id);
                $.ajax({
                    url: "/intranet/website/album/" + id,
                    type: "GET",
                    beforeSend: function () {
                        $("#loading").show();
                        $("#btnEliminar_Album").show();
                    },
                    success: function (data) {
                        $("#modAlbum").niftyModal('show');
                        $("#hddCodigo_Album").val(id);
                        $("#txtNombre_Album").val(data["nombre"]);
                        $("#txtFecha_Album").val(data["fecha"]);
                        $("#chkPublico_Album").iCheck(data['publico'] == true ? "check" : "uncheck");
                        $("#modAlbum .modal-header h3").text("Modificando: " + data["nombre"]);
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });

            }
        }

        function listarAlbum() {
            $.ajax({
                url: "/intranet/website/album/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $("#cmbAlbum").empty();
                    $.each(data, function (index, value) {
                        opciones += "<option value=" + value["id"] + ">" + value["nombre"] + "</option>";
                    });
                    $("#cmbAlbum").append(opciones);
                },
                error: function (request, status, error) {
                    mostrar_error(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function guardarAlbum() {
            var accion = $("#hddCodigo_Album").val() == "" ? true : false;
            if ($("#frmAlbum").parsley().validate()) {
                if (accion)
                    registrarAlbum()
                else
                    modificarAlbum()
            }
        }

        function obtenerDatosAlbum() {
            var info = [{
                "_token": "{{ csrf_token() }}",
                "nombre": $("#txtNombre_Album").val(),
                "fecha": $("#txtFecha_Album").val(),
                "publico": $("#chkPublico_Album").is(":checked")
            }][0];
            return info;
        }

        function registrarAlbum() {
            if (confirm("¿Deseas continuar el registro?")) {
                var info = obtenerDatosAlbum();
                $.ajax({
                    url: "/intranet/website/album",
                    type: "POST",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Registro', 'Datos registrados correctamente', 'primary');
                        cancelarAlbum();
                        $("#modAlbum").niftyModal('hide');
                        listarAlbum();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function modificarAlbum() {
            if (confirm("¿Deseas continuar la modificación?")) {
                var info = obtenerDatosAlbum();
                $.ajax({
                    url: "/intranet/website/album/" + $("#hddCodigo_Album").val(),
                    type: "PUT",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Actualización', 'Datos actualizados correctamente', 'success');
                        cancelarAlbum();
                        $("#modAlbum").niftyModal('hide');
                        listarAlbum();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function eliminarAlbum(id) {
            if (confirm("¿Deseas eliminar el elemento?")) {
                var info = [{"_token": "{{ csrf_token() }}"}][0];
                $.ajax({
                    url: "/intranet/website/album/" + $("#hddCodigo_Album").val(),
                    type: "DELETE",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Eliminación', 'Datos actualizados correctamente', 'warning');
                        cancelarAlbum();
                        $("#modAlbum").niftyModal('hide');
                        listarAlbum();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function listarFotos() {
            var album_id =  $("#cmbAlbum").val();
            $("#hddAlbum_Id").val(album_id);
            if(album_id != ""){
                var info = [{"_token": "{{ csrf_token() }}",
                    "album_id": parseInt(album_id)}][0];
                $.ajax({
                    url: "/intranet/website/foto/listar",
                    type: "GET",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        var imagenes="";
                        $.each(data,function( index, value ) {
                            imagenes += '<div class="item" style="position: absolute; left: 0px; top: 0px;">';
                            imagenes += '   <div class="photo">';
                            imagenes += '        <div class="head">';
                            imagenes += '            <span class="pull-right"><i class="fa fa-heart"></i></span>';
                            imagenes += '            <h4>'+value["nombre"]+'</h4>';
                            imagenes += '        </div>';
                            imagenes += '        <div class="img">';
                            imagenes += '           <img src="'+value["archivo"]+'">';
                            imagenes += '           <div class="over">';
                            imagenes += '               <div class="func">';
                            imagenes += '                   <a href="#"><i class="fa fa-link"></i></a>';
                            imagenes += '                   <a href="'+value["archivo"]+'" class="image-zoom"><i class="fa fa-search"></i></a>';
                            imagenes += '               </div>';
                            imagenes += '           </div>';
                            imagenes += '       </div>';
                            imagenes += '   </div>';
                            imagenes += '</div>';
                        });
                        $("#dvGaleria").html(imagenes);
                        var elem = document.querySelector('.gallery-cont');
                        var msnry = new Masonry( elem, {
                            // options
                            itemSelector: '.item',
                            columnWidth: 50
                        });
                        $(".image-zoom").magnificPopup({
                            type: "image",
                            mainClass: "mfp-with-zoom",
                            zoom: {
                                enabled: !0, duration: 300, easing: "ease-in-out", opener: function (a) {
                                    var b = $(a).parents("div.img");
                                    return b
                                }
                            }
                        });
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }


        }
        function guardar() {
            var accion = $("#hddCodigo").val() == "" ? true : false;
            if ($("#frmEvento").parsley().validate()) {
                if (accion)
                    registrar()
                else
                    modificar()
            }

        }

        function obtenerDatos() {
            var info = [{
                "_token": "{{ csrf_token() }}",
                "nombre": $("#txtNombre").val(),
                "descripcion": $("#txtDescripcion").val(),
                "contenido": $("#dvContenido").summernote('code'),
                "lugar": $("#txtLugar").val(),
                "hora": $("#txtHora").val(),
                "fecha": $("#txtFecha").val(),
                "publico": $("#chkPublico").is(":checked")
            }][0];
            return info;
        }

        function registrar() {
            if (confirm("¿Deseas continuar el registro?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/intranet/website/evento",
                    type: "POST",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Registro', 'Datos registrados correctamente', 'primary');
                        cancelar();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function modificar() {
            if (confirm("¿Deseas continuar la modificación?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/intranet/website/evento/" + $("#hddCodigo").val(),
                    type: "PUT",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Actualización', 'Datos actualizados correctamente', 'success');
                        cancelar();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function eliminar(id) {
            if (confirm("¿Deseas eliminar el elemento?")) {
                var info = [{"_token": "{{ csrf_token() }}"}][0];
                $.ajax({
                    url: "/intranet/website/evento/" + id,
                    type: "DELETE",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Eliminación', 'Datos actualizados correctamente', 'warning');
                        cancelar();
                    },
                    error: function (request, status, error) {
                        mostrar_error(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function editar(id) {
            $.ajax({
                url: "/intranet/website/evento/" + id,
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    $("#hddCodigo").val(id);
                    $("#txtNombre").val(data["nombre"]);
                    $("#txtDescripcion").val(data["descripcion"]);
                    $("#dvContenido").summernote('code', data["contenido"]);
                    $("#txtFecha").val(data["fecha"]);
                    $("#txtLugar").val(data["lugar"]);
                    $("#txtHora").val(data["hora"]);
                    $("#chkPublico").iCheck(data['publico'] == true ? "check" : "uncheck");
                    $("#btnGuardar").text("Guardar");
                    $('a[href="#tp2"]').click();
                    $('a[href="#tp2"]').text("Modificando : " + data["nombre"]);
                },
                error: function (request, status, error) {
                    mostrar_error(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function cancelar() {
            $("#hddCodigo").val("");
            $("#txtNombre").val("");
            $("#txtDescripcion").val("");
            $("#dvContenido").summernote('reset');
            $("#txtFecha").val("");
            $("#txtLugar").val("");
            $("#txtHora").val("");
            $("#chkPublico").iCheck("check");

            $("#btnGuardar").text("Registrar");
            $('#frmEvento').parsley().reset();
            $('a[href="#tp1"]').click();
            $('a[href="#tp2"]').text("Registrar");
            listar();
        }

        function listar() {
            $.ajax({
                url: "/intranet/website/evento/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    t.clear().draw();
                    $.each(data, function (index, value) {
                        var nodo = t.row.add([
                            value['fecha'], value['nombre'],
                            grupo_opciones(value['id'])]).draw(false).node();
                        if (value["publico"] == false)
                            $(nodo).addClass('danger');
                    });
                },
                error: function (request, status, error) {
                    mostrar_error(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }
    </script>
@endsection



