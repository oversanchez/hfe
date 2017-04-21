@extends('principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Trabajador</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
            <button class="btn btn-default right" onclick="ejemplo()">Ejemplo</button>
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
                                <div class="container" style="margin-top:-35px;">
                                    <form id="frmTrabajador" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                                        <input type="hidden" id="hddCodigo" value="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <label class="col-sm-2">Categoria</label>
                                                    <div class="col-sm-8">
                                                        <select id="cmbCategoria_Trabajador" class="form-control" required="">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Tipo Doc.</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="cmbTipoDoc" requerid="">
                                                            <option value="DN">DNI</option>
                                                            <option value="CE">CARNET EXTRANJERÍA</option>
                                                            <option value="PA">PASAPORTE</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2">Nro Doc.</label>
                                                    <div class="col-sm-3">
                                                        <input id="txtNroDoc" class="form-control" type="text" data-parsley-trigger="change" data-parsley-length="[8,15]" data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Apellidos</label>
                                                    <div class="col-sm-4">
                                                        <input id="txtApPat" class="form-control" type="text" maxlength="50" data-parsley-trigger="change" data-parsley-length="[1,50]" data-parsley-required="true">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input id="txtApMat" class="form-control" type="text" maxlength="50">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Nombres</label>
                                                    <div class="col-sm-8">
                                                        <input id="txtNombres" class="form-control" type="text" maxlength="50" data-parsley-trigger="change" data-parsley-length="[2,50]" data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Sexo</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="cmbSexo" requerid="">
                                                            <option value="M">MASCULINO</option>
                                                            <option value="F">FEMENINO</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2">Fecha Nac.</label>
                                                    <div class="col-sm-3">
                                                        <input id="txtFechaNac" class="form-control date datetime" data-min-view="2" data-date-format="dd/mm/yyyy" type="text" maxlength="10" data-parsley-trigger="change" data-parsley-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="margin-left:-10px;">
                                                <div class="row">
                                                    <label class="col-sm-3">Dirección</label>
                                                    <div class="col-sm-9">
                                                        <input id="txtDireccion" class="form-control" type="text" maxlength="100" data-parsley-trigger="change"  data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3">Email</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="email" id="txtEmail" placeholder="oliver.sanchez@gmail.com" data-parsley-trigger="change"  data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3">Telefonos</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" id="txtTelf_Movil" placeholder="Ejem. 987644413" data-parsley-trigger="change"  data-parsley-required="true">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="txtTelf_Fijo" placeholder="Ejem. 074234212">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3">Grado Profesional</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="cmbGrado_Profesional" required="">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3">Especialidad</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" id="cmbEspecialidad" required="">
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-3">
                                                        <input id="chkActivo" class="icheck" type="checkbox" checked>Activo</label>
                                                </div>
                                            </div>
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
        });
        function ejemplo(){
            $("#txtNombres").val("OLIVER");
            $("#txtApPat").val("SANCHEZ");
            $("#txtApMat").val("ASCORBE");
            $("#txtNroDoc").val('46041769');
            $("#txtEmail").val("oliver.sanchez.a@gmail.com");
            $("#txtFechaNac").val("26/07/1989");
            $("#txtDireccion").val("AV. AUGUSTO B. LEGUIA 1396");
            $("#txtTelf_Movil").val("968644416");
            $("#cmbGrado_Profesional").val("1");
            $("#cmbEspecialidad").val("1");
            $("#cmbCategoria_Trabajador").val("1");
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
                "nombres": $("#txtNombres").val(),
                "apellido_paterno": $("#txtApPat").val(),
                "apellido_materno": $("#txtApMat").val(),
                "numero_documento": $("#txtNroDoc").val(),
                "tipo_documento": $("#cmbTipoDoc").val(),
                "fecha_nacimiento": $("#txtFechaNac").val(),
                "sexo": $("#cmbSexo").val(),
                "direccion": $("#txtDireccion").val(),
                "email": $("#txtEmail").val(),
                "telf_movil": $("#txtTelf_Movil").val(),
                "telf_fijo": $("#txtTelf_Fijo").val(),
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
                    $("#txtNombres").val(data['persona']['nombres']);
                    $("#txtApPat").val(data['persona']['apellido_paterno']);
                    $("#txtApMat").val(data['persona']['apellido_materno']);
                    $("#txtNroDoc").val(data['persona']['numero_documento']);
                    $("#cmbTipoDoc").val(data['persona']['tipo_documento']);
                    $("#txtFechaNac").val(data['persona']['fecha_nacimiento']);
                    $("#cmbSexo").val(data['persona']['sexo']);
                    $("#txtDireccion").val(data['persona']['direccion']);
                    $("#txtEmail").val(data['persona']['email']);
                    $("#txtTelf_Movil").val(data['persona']['telf_movil']);
                    $("#txtTelf_fijo").val(data['persona']['telf_fijo']);
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
            $("#txtNombres").val("");
            $("#txtApPat").val("");
            $("#txtApMat").val("");
            $("#txtNroDoc").val("");
            $("#cmbTipoDoc").val("DN");
            $("#txtFechaNac").val("");
            $("#cmbSexo").val("M");
            $("#txtDireccion").val("");
            $("#txtEmail").val("");
            $("#txtTelf_Movil").val("");
            $("#txtTelf_fijo").val("");
            $("#cmbGrado_Profesional").val("");
            $("#cmbEspecialidad").val("");
            $("#cmbCategoria_Trabajador").val("");
            $("#chkActivo").iCheck("check");
            $("#btnGuardar").text("Registrar");
            $('#frmTrabajador').parsley().reset();
            $('a[href="#tp1"]').click();
            $('a[href="#tp2"]').text("Registrar");
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
                        t.row.add([value['persona']['numero_documento'],
                            value['persona']['apellido_paterno'],
                            value['persona']['apellido_materno'],
                            value['persona']['nombres'],
                            value['categoria_trabajador']['abreviatura'],
                            value['grado_profesional']['abreviatura'],
                            value['especialidad']['nombre'],
                            value['persona']['telf_movil'],
                            grupo_opciones(value['id'])]).draw(false);
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
