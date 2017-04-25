@extends('principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Trabajador</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
            <button class="btn btn-link pull-right" style="margin-top:5px;font-size: 16px;" onclick='agregarPersona("#",["cmbPersona"])'> Agregar persona</button>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="tab-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tp1" data-toggle="tab">Listado</a></li>
                            <li><a href="#tp2" data-toggle="tab">Registrar</a></li>
                            <li><a href="#tp3" data-toggle="tab">Importar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tp1" class="tab-pane active cont">
                                <table class='table table-bordered dataTable no-footer' id="tblListado">
                                    <thead>
                                    <tr>
                                        <th>Nro Doc.</th>
                                        <th>Ap. Paterno</th>
                                        <th>Ap. Materno</th>
                                        <th>Nombres</th>
                                        <th>Categ.</th>
                                        <th>Grado Prof.</th>
                                        <th>Especialidad</th>
                                        <th>Celular</th>
                                        <th style="width:76px;">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div id="tp2" class="tab-pane cont">
                                <div class="container">
                                    <form id="frmTrabajador" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                                        <input type="hidden" id="hddCodigo" value="">
                                        <div class="row">
                                            <label class="col-sm-2">Selecciona una persona</label>
                                            <div class="col-sm-6">
                                                <select id="cmbPersona" required="" style='width:100%;'>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="#" onclick="editarPersona('cmbPersona')" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">Categoria</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="cmbCategoria_Trabajador" required="">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">Grado Profesional</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="cmbGrado_Profesional" required="">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">Especialidad</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" id="cmbEspecialidad" required="">
                                                </select>
                                            </div>
                                            <label class="col-sm-3">
                                                <input id="chkActivo" class="icheck" type="checkbox" checked>Activo</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="btnGuardar" class="btn btn-primary" onclick="guardar()">Registrar</button>
                                        <button class="btn btn-default" onclick="cancelar()">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                            <div id="tp3" class="tab-pane cont">
                                <div class="container">
                                    <h2>Typography</h2>
                                    <p>This is just an example of content writen by <b>Jeff Hanneman</b>, as you can see it
                                        is a clean design with large</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('form_persona')

@endsection

@section('scripts')
    <script type="text/javascript">

        var t;
        $(document).ready(function () {
            //initialize the javascript
            App.init();
            App.formElements();
            t = $("#tblListado").DataTable();
            $("#frmTrabajador").parsley();
            listar();
            listarEspecialidades();
            listarCategorias_Trabajador();
            listarGrados_Profesionales();
            $("#cmbPersona").select2();
            listarPersonas_No_Trabajadores('cmbPersona');
            $("#frmPersona").parsley();
        });

        function listarPersonas_No_Trabajadores(id) {
            $.ajax({
                url: "/mantenimientos/persona/listar_no_trabajadores",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $("#"+id).empty();
                    $.each(data,function( index, value ) {
                        var color = value["sexo"]=="M" ? "black" : "red";
                        opciones += "<option style='color:"+color+";' value='"+value["id"]+"'>"+value["apellido_paterno"]+' '+value["apellido_materno"]+' '+value["nombres"]+' ('+value["numero_documento"]+")</option>";
                    });
                    $("#"+id).append(opciones);
                },
                error: function (request, status, error) {
                    mostrar_error(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function guardar(){
            var accion = $("#hddCodigo").val() == "" ? true : false;
            if($("#frmTrabajador").parsley().validate()){
                if (accion)
                    registrar()
                else
                    modificar()
            }

        }

        function obtenerDatos(){
            var info = [{"_token": "{{ csrf_token() }}",
                "persona_id": $("#cmbPersona").val(),
                "grado_profesional_id": parseInt($("#cmbGrado_Profesional").val()),
                "especialidad_id": parseInt($("#cmbEspecialidad").val()),
                "categoria_trabajador_id": parseInt($("#cmbCategoria_Trabajador").val()),
                "activo": $("#chkActivo").is(":checked")}][0];
            return info;
        }

        function registrar() {
            if (confirm("¿Deseas continuar el registro?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/mantenimientos/trabajador",
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
                    url: "/mantenimientos/trabajador/" + $("#hddCodigo").val(),
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
                        console.log(request.responseText);
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
                    url: "/mantenimientos/trabajador/" + id,
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
                        console.log(request.responseText);
                    },
                    complete: function () {
                        $("#loading").hide();
                    }
                });
            }
        }

        function editar(id) {
            $.ajax({
                url: "/mantenimientos/trabajador/" + id,
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    $("#hddCodigo").val(id);
                    $("#cmbPersona").select2("val", data["persona_id"]);
                    $("#cmbGrado_Profesional").val(data['grado_profesional_id']);
                    $("#cmbEspecialidad").val(data['especialidad_id']);
                    $("#cmbCategoria_Trabajador").val(data['categoria_trabajador_id']);
                    $("#chkActivo").iCheck(data['activo'] == true ? "check" : "uncheck");
                    $("#btnGuardar").text("Guardar");
                    $('a[href="#tp2"]').click();
                    $('a[href="#tp2"]').text("Modificando : "+data["persona"]["apellido_paterno"]+' '+data["persona"]['apellido_paterno']+' '+data["persona"]["nombres"]);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function cancelar(){
            $("#hddCodigo").val("");
            $("#cmbPersona").val("").change();
            $("#cmbGrado_Profesional").val("");
            $("#cmbEspecialidad").val("");
            $("#cmbCategoria_Trabajador").val("");
            $("#chkActivo").iCheck("check");
            $("#btnGuardar").text("Registrar");
            $('#frmTrabajador').parsley().reset();
            $('a[href="#tp1"]').click();
            $('a[href="#tp2"]').text("Registrar");
            listarPersonas_No_Trabajadores('cmbPersona');
            listar();
        }

        function listar() {
            $.ajax({
                url: "/mantenimientos/trabajador/listar",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    t.clear().draw();
                    $.each(data,function( index, value ) {
                        var nodo = t.row.add([value['persona']['numero_documento'],
                            value['persona']['apellido_paterno'],
                            value['persona']['apellido_materno'],
                            value['persona']['nombres'],
                            value['categoria_trabajador']['abreviatura'],
                            value['grado_profesional']['abreviatura'],
                            value['especialidad']['nombre'],
                            value['persona']['telf_movil'],
                            grupo_opciones(value['id'])]).draw(false).node();
                        if(value["activo"]==false)
                            $(nodo).addClass('danger');
                    });

                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function listarEspecialidades() {
            $.ajax({
                url: "/mantenimientos/especialidad/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data,function( index, value ) {
                        opciones += "<option value='"+value["id"]+"'>"+value["nombre"]+"</option>";
                    });
                    $("#cmbEspecialidad").append(opciones);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function listarCategorias_Trabajador() {
            $.ajax({
                url: "/mantenimientos/categoria_trabajador/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data,function( index, value ) {
                        opciones += "<option value='"+value["id"]+"'>"+value["nombre"]+"</option>";
                    });
                    $("#cmbCategoria_Trabajador").append(opciones);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function listarGrados_Profesionales() {
            $.ajax({
                url: "/mantenimientos/grado_profesional/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data,function( index, value ) {
                        opciones += "<option value='"+value["id"]+"'>"+value["nombre"]+"</option>";
                    });
                    $("#cmbGrado_Profesional").append(opciones);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

    </script>
@endsection

