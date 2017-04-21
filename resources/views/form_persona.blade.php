<div id="modPersona" class="md-modal colored-header md-effect-10">
    <div class="md-content">
        <div class="modal-header">
            <h3>Personas</h3>
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <div class="modal-body">
            <form id="frmPersona" method="post" data-parsley-validate="" data-parsley-excluded="[disabled=disabled]" novalidate="">
                <input type="hidden" id="hddCodigo" value="">
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
                        <input id="txtNroDoc"  class="form-control" type="text" data-parsley-trigger="change" data-parsley-length="[8,15]" data-parsley-required="true">
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
                <div class="row">
                    <label class="col-sm-2">Dirección</label>
                    <div class="col-sm-9">
                        <input id="txtDireccion" class="form-control" type="text" maxlength="100" data-parsley-trigger="change"  data-parsley-required="true">
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="email" id="txtEmail" placeholder="oliver.sanchez@gmail.com" data-parsley-trigger="change"  data-parsley-required="true">
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2">Telefonos</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="txtTelf_Movil" placeholder="Ejem. 987644413" data-parsley-trigger="change"  data-parsley-required="true">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="txtTelf_Fijo" placeholder="Ejem. 074234212">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Proceed</button>
        </div>
    </div>
</div>
<div class="md-overlay"></div>

<script>

    function buscar_numero_documento(obj) {
        var numero_documento = $(obj).val();
        $.ajax({
            url: "/mantenimientos/persona/buscar_numero_documento",
            type: "GET",
            data: {"numero_documento": numero_documento},
            beforeSend: function () {
                $("#loading").show();
            },
            success: function (data) {
                if(data == null){
                    $("#modPersona").modal('show');
                }else{
                    $("#persona_id").val(data['id']);
                    $("#txtNombres").val(data['nombres']);
                    $("#txtApPat").val(data['apellido_paterno']);
                    $("#txtApMat").val(data['apellido_materno']);
                    $("#cmbTipoDoc").val(data['tipo_documento']);
                    $("#txtFechaNac").val(data['fecha_nacimiento']);
                    $("#cmbSexo").val(data['sexo']);
                    $("#txtDireccion").val(data['direccion']);
                    $("#txtEmail").val(data['email']);
                    $("#txtTelf_Movil").val(data['telf_movil']);
                    $("#txtTelf_fijo").val(data['telf_fijo']);
                }


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