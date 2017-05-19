@extends('intranet/principal')

@section('content')
    <div id="pcont" class="container-fluid">
        <div class="page-head">
            <h2 style="display:inline-block;">Información Institucional</h2>
            <i id="loading" style="display:none;" class="fa fa-2x fa-spinner fa-spin"></i>
            <button id="btnGuardar" class="btn btn-primary"  style="margin-left:20px;" onclick="guardar()">Guardar</button>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="container">
                        <form id="frmInstitucion" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                            <input type="hidden" id="hddCodigo" value="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-md-2" for="txtTelefonos">Telefonos</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtTelefonos" placeholder="Telefonos" data-parsley-trigger="change" data-parsley-required="true"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtCorreo">Correo</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtCorreo" placeholder="Correo" data-parsley-trigger="change" data-parsley-required="true"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtCiudad">Ciudad</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtCiudad" placeholder="Empresa" data-parsley-trigger="change" data-parsley-required="true"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtDireccion">Dirección</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtDireccion" placeholder="Empresa" data-parsley-trigger="change" data-parsley-required="true"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtLink_Mapa">FRAME MAPS</label>
                                        <div class="col-md-9">
                                            <textarea rows="4" type="text" class="form-control" id="txtLink_Mapa" placeholder="Frame Mapa"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtBienvenida_Texto">Bienvenida Texto</label>
                                        <div class="col-md-9">
                                            <textarea rows="4" type="text" class="form-control" id="txtBienvenida_Texto" placeholder="Descripcion del evento"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-md-3" for="txtPorque_Nosotros1">Porque Nosotros 1</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtPorque_Nosotros1" placeholder="Porque Nosotros"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3" for="txtPorque_Nosotros2">Porque Nosotros 2</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtPorque_Nosotros2" placeholder="Porque Nosotros"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3" for="txtPorque_Nosotros3">Porque Nosotros 3</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtPorque_Nosotros3" placeholder="Porque Nosotros"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3" for="txtPorque_Nosotros4">Porque Nosotros 4</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtPorque_Nosotros4" placeholder="Porque Nosotros"></div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2" for="txtBienvenida_Url">Bienvenida Url</label>
                                        <div class="col-md-9"><input type="text" class="form-control" id="txtBienvenida_Url" placeholder="Empresa"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
            $("#frmInstitucion").parsley();
            listar();
        });

        function guardar(){
            if($("#frmInstitucion").parsley().validate()){
                modificar()
            }

        }

        function obtenerDatos(){
            var info = [{"_token": "{{ csrf_token() }}",
                "telefonos": $("#txtTelefonos").val(),
                "correo": $("#txtCorreo").val(),
                "ciudad": $("#txtCiudad").val(),
                "direccion": $("#txtDireccion").val(),
                "link_mapa": $("#txtLink_Mapa").val(),
                "bienvenida_texto": $("#txtBienvenida_Texto").val(),
                "bienvenida_url": $("#txtBienvenida_Url").val(),
                "porque_nosotros_1": $("#txtPorque_Nosotros1").val(),
                "porque_nosotros_2": $("#txtPorque_Nosotros2").val(),
                "porque_nosotros_3": $("#txtPorque_Nosotros3").val(),
                "porque_nosotros_4": $("#txtPorque_Nosotros4").val()}][0];
            return info;
        }

        function modificar() {
            if (confirm("¿Deseas continuar la modificación?")) {
                var info = obtenerDatos();
                $.ajax({
                    url: "/intranet/website/institucion/" + $("#hddCodigo").val(),
                    type: "PUT",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        notificacion('Actualización', 'Datos actualizados correctamente', 'success');
                        listar();
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

        function listar() {
            $.ajax({
                url: "/intranet/website/institucion/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    $.each(data,function( index, value ) {
                        $("#hddCodigo").val(value["id"]);
                        $("#txtTelefonos").val(value["telefonos"]);
                        $("#txtCorreo").val(value["correo"]);
                        $("#txtCiudad").val(value["ciudad"]);
                        $("#txtDireccion").val(value["direccion"]);
                        $("#txtLink_Mapa").val(value["link_mapa"]);
                        $("#txtBienvenida_Texto").val(value["bienvenida_texto"]);
                        $("#txtBienvenida_Url").val(value["bienvenida_url"]);
                        $("#txtPorque_Nosotros1").val(value["porque_nosotros_1"]);
                        $("#txtPorque_Nosotros2").val(value["porque_nosotros_2"]);
                        $("#txtPorque_Nosotros3").val(value["porque_nosotros_3"]);
                        $("#txtPorque_Nosotros4").val(value["porque_nosotros_4"]);
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





