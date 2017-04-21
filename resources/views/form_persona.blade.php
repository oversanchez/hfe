<div id="modPersona" class="md-modal colored-header md-effect-10"  style='width: 80%;'>
    <div class="md-content">
        <div class="modal-header">
            <h3>Personas</h3>
            <button class="btn btn-default right" onclick="ejemplo()">Ejemplo</button>
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <div class="modal-body">
            <form id="frmPersona" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                <input type="hidden" id="hddPersona_Id" value="">
                <div class="row">
                    <label class="col-sm-2">Tipo Doc.</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="cmbPersona_TipoDoc" requerid="">
                            <option value="DN">DNI</option>
                            <option value="CE">CARNET EXTRANJERÍA</option>
                            <option value="PA">PASAPORTE</option>
                        </select>
                    </div>
                    <label class="col-sm-1" style="width: 58px;padding: 5px 0px;">Nro Doc.</label>
                    <div class="col-sm-3">
                        <input onchange="buscar_numero_documento(this)" id="txtPersona_Numero_Documento"  class="form-control" type="text" data-parsley-trigger="change" data-parsley-length="[8,15]" data-parsley-required="true">
                    </div>
                    <div class="col-sm-2" style="padding: 6px 0px;">
                        <label id="persona_mensaje">Teclea ⏎ ENTER </label>
                        <div id="persona_loading" style="display:none;">
                            <i class="fa fa-spinner fa-spin"></i> <label>Validando</label>
                        </div>
                    </div>
                </div>
                <div id="dvPersona">
                    <div class="row">
                        <label class="col-sm-2">Apellidos</label>
                        <div class="col-sm-4">
                            <input id="txtPersona_ApPat" class="form-control" type="text" maxlength="50" data-parsley-trigger="change" data-parsley-length="[1,50]" data-parsley-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input id="txtPersona_ApMat" class="form-control" type="text" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2">Nombres</label>
                        <div class="col-sm-8">
                            <input id="txtPersona_Nombres" class="form-control" type="text" maxlength="50" data-parsley-trigger="change" data-parsley-length="[2,50]" data-parsley-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2">Sexo</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="cmbPersona_Sexo" requerid="">
                                <option value="M">MASCULINO</option>
                                <option value="F">FEMENINO</option>
                            </select>
                        </div>
                        <label class="col-sm-2">Fecha Nac.</label>
                        <div class="col-sm-3">
                            <input id="txtPersona_FechaNac" class="form-control date datetime" data-min-view="2" data-date-format="dd/mm/yyyy" type="text" maxlength="10" data-parsley-trigger="change" data-parsley-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2">Dirección</label>
                        <div class="col-sm-9">
                            <input id="txtPersona_Direccion" class="form-control" type="text" maxlength="100" data-parsley-trigger="change"  data-parsley-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" id="txtPersona_Email" placeholder="oliver.sanchez@gmail.com" data-parsley-trigger="change"  data-parsley-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2">Telefonos</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="txtPersona_Telf_Movil" placeholder="Ejem. 987644413" data-parsley-trigger="change"  data-parsley-required="true">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" id="txtPersona_Telf_Fijo" placeholder="Ejem. 074234212">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button onclick='cancelarPersona()' type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
            <button id="btnPersona_Registrar" onclick='guardarPersona()' type="button" data-dismiss="modal" class="btn btn-primary btn-flat">Registrar</button>
        </div>
    </div>
</div>
<div class="md-overlay"></div>

<script>

    var receptor_id = "";

    function ejemplo(){
        $("#txtPersona_Nombres").val("OLIVER");
        $("#txtPersona_ApPat").val("SANCHEZ");
        $("#txtPersona_ApMat").val("ASCORBE");
        $("#txtPersona_Numero_Documento").val('4604176');
        $("#txtPersona_Email").val("oliver.sanchez.a@gmail.com");
        $("#txtPersona_FechaNac").val("26/07/1989");
        $("#txtPersona_Direccion").val("AV. AUGUSTO B. LEGUIA 1396");
        $("#txtPersona_Telf_Movil").val("968644416");
        //$("#cmbGrado_Profesional").val("1");
        //$("#cmbEspecialidad").val("1");
        //$("#cmbCategoria_Trabajador").val("1");
    }

    function cancelarPersona(){
        $("#hddPersona_Id").val("");
        $("#txtPersona_Nombres").val("");
        $("#txtPersona_ApPat").val("");
        $("#txtPersona_ApMat").val("");
        $("#txtPersona_Numero_Documento").val("");
        $("#txtPersona_Email").val("");
        $("#txtPersona_FechaNac").val("");
        $("#txtPersona_Direccion").val("");
        $("#txtPersona_Telf_Movil").val("");
        $("#cmbPersona_Sexo").val("M");
        $("#cmbPersona_TipoDoc").val("DN");
        $('#frmPersona').parsley().reset();
        $('#dvPersona :input').attr('disabled', true);
        $("#txtPersona_Numero_Documento").prop('disabled', false);
        $("#btnPersona_Registrar").prop('disabled',true);
        $("#txtPersona_Numero_Documento").select();
    }
    function agregarPersona(id){
        receptor_id = id;
        $("#modPersona").niftyModal('show');
        cancelarPersona();
    }

    function obtenerDatosPersona(){
        var info = [{"_token": "{{ csrf_token() }}",
            "nombres": $("#txtPersona_Nombres").val(),
            "apellido_paterno": $("#txtPersona_ApPat").val(),
            "apellido_materno": $("#txtPersona_ApMat").val(),
            "tipo_documento": $("#cmbPersona_TipoDoc").val(),
            "numero_documento": $("#txtPersona_Numero_Documento").val(),
            "sexo": $("#cmbPersona_Sexo").val(),
            "fecha_nacimiento": $("#txtPersona_FechaNac").val(),
            "direccion": $("#txtPersona_Direccion").val(),
            "email": $("#txtPersona_Email").val(),
            "telf_fijo": $("#txtPersona_Telf_Fijo").val(),
            "telf_movil": $("#txtPersona_Telf_Movil").val()}][0];
        return info;
    }
    function guardarPersona(){
        var accion = $("#hddPersona_Id").val() == "" ? true : false;
        if($("#frmPersona").parsley().validate()){
            if (accion)
                registrarPersona()
        }
        $(".parsley-errors-list").html("");
    }
    function registrarPersona() {
        if (confirm("¿Deseas continuar el registro?")) {
            var info = obtenerDatosPersona();
            $.ajax({
                url: "/mantenimientos/persona",
                type: "POST",
                data: info,
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    notificacion('Registro', 'Datos registrados correctamente', 'primary');
                    cancelarPersona();
                    $("#modPersona").niftyModal("hide");
                    listarPersonas(receptor_id);
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

    function listarPersonas(id) {
        $.ajax({
            url: "/mantenimientos/persona/*",
            type: "GET",
            beforeSend: function () {
                $("#loading").show();
            },
            success: function (data) {
                var opciones = "<option value=''>---</option>";
                $("#"+id).empty();
                $.each(data,function( index, value ) {
                    opciones += "<option value='"+value["id"]+"'>"+value["apellido_paterno"]+' '+value["apellido_materno"]+' '+value["nombres"]+' ('+value["numero_documento"]+")</option>";
                });
                $("#"+id).append(opciones);
                $("#"+id).select2();
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            },
            complete: function () {
                $("#loading").hide();
            }
        });
    }

    function buscar_numero_documento(obj) {
        var numero_documento = $(obj).val();
        $.ajax({
            url: "/mantenimientos/persona/buscar_numero_documento",
            type: "GET",
            data: {"numero_documento": numero_documento},
            beforeSend: function () {
                $("#persona_mensaje").hide();
                $("#persona_loading").show();
            },
            success: function (data) {
                if(data.length > 0){
                    $("#txtPersona_Numero_Documento").select();
                    notificacion('Validacion','DNI ya registrado','warning');
                    $("#btnPersona_Registrar").prop('disabled',true);
                }else{
                    notificacion('Validacion','DNI válido','info');
                    $("#txtPersona_Numero_Documento").prop('disabled', true);
                    $('#dvPersona :input').attr('disabled', false);
                    $("#btnPersona_Registrar").prop('disabled',false);
                    $("#txtPersona_ApPat").select();
                }
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            },
            complete: function () {
                $("#persona_loading").hide();
                $("#persona_mensaje").show();
            }
        });
    }
</script>