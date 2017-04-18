@extends('principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Trabajador</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="tab-container">
                        <ul class="nav nav-tabs">
                            <li><a href="#tp1" data-toggle="tab">Listado</a></li>
                            <li class="active"><a href="#tp2" data-toggle="tab">Registrar</a></li>
                            <li><a href="#tp3" data-toggle="tab">Importar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tp1" class="tab-pane cont">
                                <table class='table table-bordered dataTable no-footer' id="tblListado">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th>Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div id="tp2" class="tab-pane active cont">
                                <div class="container">
                                    <form id="frmTrabajador" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <label class="col-sm-2">Tipo Doc.</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="cmbTipoDoc" data-parsley-id="7696">
                                                            <option value="DNI">DNI</option>
                                                            <option value="CARNET EXTRANJERIA">CARNET EXTRANJERIA</option>
                                                            <option value="PASAPORTE">PASAPORTE</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2">Nro Doc.</label>
                                                    <div class="col-sm-3"><input id="txtNroDoc" class="form-control" type="text" data-parsley-trigger="change" data-parsley-length="[8,15]" data-parsley-required="true" data-parsley-id="1491" data-original-title="" title=""><ul class="parsley-errors-list filled" id="parsley-id-1491"></ul></div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Apellidos</label>
                                                    <div class="col-sm-4">
                                                        <input id="txtApPat" class="form-control" type="text" maxlength="50" style="text-transform: uppercase;" data-parsley-trigger="change" data-parsley-length="[1,50]" data-parsley-required="true" data-parsley-id="9250" data-original-title="" title=""><ul class="parsley-errors-list filled" id="parsley-id-9250"></ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input id="txtApMat" class="form-control" type="text" maxlength="50" style="text-transform: uppercase;" data-parsley-trigger="change" data-parsley-length="[1,50]" data-parsley-required="true" data-parsley-id="9026" data-original-title="" title=""><ul class="parsley-errors-list filled" id="parsley-id-9026"></ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Nombres</label>
                                                    <div class="col-sm-8">
                                                        <input id="txtNombres" class="form-control" type="text" maxlength="50" data-parsley-trigger="change" data-parsley-length="[2,50]" data-parsley-required="true" data-parsley-id="0935" data-original-title="" title=""><ul class="parsley-errors-list filled" id="parsley-id-0935"></ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Sexo</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="cmbSexo" data-parsley-id="5253">
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Femenino">Femenino</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2">Fecha Nac.</label>
                                                    <div class="col-sm-3"><input id="txtFechaNac" class="form-control date datetime" data-min-view="2" data-date-format="dd/mm/yyyy" type="text" maxlength="10" data-parsley-trigger="change" data-parsley-required="true" data-parsley-id="5754" data-original-title="" title=""><ul class="parsley-errors-list filled" id="parsley-id-5754"></ul></div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Dirección</label>
                                                    <div class="col-sm-8">
                                                        <input id="txtDireccion" class="form-control" type="text" maxlength="100" style="text-transform: uppercase;" data-parsley-id="8768"><ul class="parsley-errors-list" id="parsley-id-8768"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="margin-left:-90px;">
                                                <div class="row">
                                                    <label class="col-sm-2">Email</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="email" id="txtTelf_Movil" placeholder="oliver.sanchez@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Telefonos</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" id="txtTelf_Movil" placeholder="Ejem. 987644413">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" id="txtTelf_Fijo" placeholder="Ejem. 074234212">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2">Grado Acad.</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="cmbGrado" required="">
                                                            <option value="Técnico">TÉCNICO</option>
                                                            <option value="Bachiller">BACHILLER</option>
                                                            <option value="Licenciado">LICENCIADO</option>
                                                            <option value="Ingeniero">INGENIERO</option>
                                                            <option value="Maestria">MAESTRÍA</option>
                                                            <option value="Doctorado">DOCTORADO</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2">Especialidad</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-control" id="cmbEspecialidad" required="">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3">
                                                        <input id="chkVigencia" class="icheck" type="checkbox" data-parsley-multiple="chkVigencia">Vigencia
                                                    </label>
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
            $("#frmNivel").parsley();
            listar();
        });

        function guardar(){
            var accion = $("#hddCodigo").val() == "" ? true : false;
            if($("#frmNivel").parsley().validate()){
                if (accion)
                    registrar()
                else
                    modificar()
            }

        }

        function obtenerDatos(){
            var info = [{"_token": "{{ csrf_token() }}",
                "nombre": $("#txtNombre").val(),
                "abreviatura": $("#txtAbreviatura").val()}][0];
            return info;
        }

        function registrar() {
            if (confirm("¿Deseas continuar el registro?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/mantenimientos/nivel",
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
                        console.log(request.responseText);
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
                    url: "/mantenimientos/nivel/" + $("#hddCodigo").val(),
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
                    url: "/mantenimientos/nivel/" + id,
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
                url: "/mantenimientos/nivel/" + id,
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    $("#hddCodigo").val(id);
                    $("#txtNombre").val(data["nombre"]);
                    $("#txtAbreviatura").val(data["abreviatura"]);
                    $("#btnGuardar").text("Guardar");
                    $('a[href="#tp2"]').click();
                    $('a[href="#tp2"]').text("Modificando : "+data["nombre"]);
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
            $("#txtNombre").val("");
            $("#txtAbreviatura").val("");
            $("#btnGuardar").text("Registrar");
            $('#frmNivel').parsley().reset();
            $('a[href="#tp1"]').click();
            $('a[href="#tp2"]').text("Registrar");
            listar();
        }

        function listar() {
            $.ajax({
                url: "/mantenimientos/nivel/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    t.clear().draw();
                    $.each(data,function( index, value ) {
                        t.row.add([value['nombre'],value['abreviatura']
                            ,grupo_opciones(value['id'])]).draw(false);
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
    </script>
@endsection

