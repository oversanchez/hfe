@extends('principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Alumnos</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
            <button class="btn btn-link pull-right" style="margin-top:5px;font-size: 16px;" onclick='agregarPersona("#",["cmbPadre","cmbMadre"])'> Agregar alumno</button>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="tab-container">
                        <ul class="nav nav-tabs">
                            <li><a href="#tp1" data-toggle="tab">Listado</a></li>
                            <li class="active"><a href="#tp2" data-toggle="tab">Registrar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tp1" class="tab-pane cont">
                                <table class='table table-bordered dataTable no-footer' id="tblListado">
                                    <thead>
                                    <tr>
                                        <th>Nro. Doc</th>
                                        <th>Ap. Paterno</th>
                                        <th>Ap. Materno</th>
                                        <th>Nombres</th>
                                        <th>Colegio Proc.</th>
                                        <th>Apoderado</th>
                                        <th style="width:76px;">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div id="tp2" class="tab-pane active cont">
                                <div class="container">
                                    <form id="frmAlumno" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                                        <input type="hidden" id="hddCodigo" value="">
                                        <div class="row">
                                            <label class="col-sm-2">Alumno</label>
                                            <div class="col-sm-6">
                                                <select id="cmbPersona" required="" style='width:100%;'>
                                                </select>
                                            </div>
                                            <a href="#" onclick="editarPersona('cmbPersona')" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">Codigo Educando</label>
                                            <div class="col-sm-2">
                                                <input type="text" id="txtCodigo_Educando" class="form-control">
                                            </div>
                                            <label class="col-sm-2">Codigo Recaudación</label>
                                            <div class="col-sm-2">
                                                <input type="text" id="txtCodigo_Recaudacion" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">Colegio Procedencia</label>
                                            <div class="col-sm-6">
                                                <select id="cmbColegio_Procedencia" required="" style='width:100%;'>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2">
                                                <input id="chkPadres_Conviven" class="icheck" type="checkbox" checked>Padres viven juntos
                                            </label>
                                            <label class="col-sm-2">
                                                <input id="chkActivo" class="icheck" type="checkbox" checked> Activo
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="btnGuardar" class="btn btn-primary" onclick="guardar()">Registrar alumno</button>
                                    </div>
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
            $("#frmAlumno").parsley();
            listar();
            $("#cmbPersona").select2();
            $("#cmbColegio_Procedencia").select2();
            listarColegio_Procedencia();
            listarPersonas_No_Alumnos('cmbPersona');
            $("#frmAlumno").parsley();
            $("#tblMiembros").DataTable({"bPaginate":false,"bAutoWidth":false,"bFilter":false});
        });

        function guardar(){
            var accion = $("#hddCodigo").val() == "" ? true : false;
            if($("#frmAlumno").parsley().validate()){
                if (accion)
                    registrar()
                else
                    modificar()
            }

        }

        function obtenerDatos(){
            var info = [{"_token": "{{ csrf_token() }}",
                "persona_id": $("#cmbPersona").val(),
                "codigo_educando": $("#txtCodigo_Educando").val(),
                "codigo_recaudacion": $("#txtCodigo_Recaudacion").val(),
                "colegio_procedencia_id": parseInt($("#cmbColegio_Procedencia").val()),
                "padres_juntos": $("#chkPadres_Conviven").is(":checked"),
                "activo": $("#chkActivo").is(":checked")}][0];
            return info;
        }

        function registrar() {
            if (confirm("¿Deseas continuar el registro?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/mantenimientos/alumno",
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
                    url: "/mantenimientos/alumno/" + $("#hddCodigo").val(),
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
                    url: "/mantenimientos/alumno/" + id,
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
            $("#chkActivo").iCheck("check");
            $("#chkPadres_Conviven").iCheck("check");
            $("#btnGuardar").text("Registrar");
            $('#frmAlumno').parsley().reset();
            listarPersonas_No_Alumnos('cmbPersona');
            $('a[href="#tp1"]').click();
            $('a[href="#tp2"]').text("Registrar");
            listar();
        }

        function listarPersonas_No_Alumnos(id) {
            $.ajax({
                url: "/mantenimientos/persona/listar_no_alumnos",
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
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        }

        function listar() {
            $.ajax({
                url: "/mantenimientos/alumno/listar",
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
                            value['colegio_procedencia']['nombre'],
                            'apoderado',
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

        function listarColegio_Procedencia() {
            $.ajax({
                url: "/mantenimientos/colegio_procedencia/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data,function( index, value ) {
                        opciones += "<option value='"+value["id"]+"'>("+value["codigo"]+") "+value["nombre"]+"</option>";
                    });
                    $("#cmbColegio_Procedencia").append(opciones);
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

