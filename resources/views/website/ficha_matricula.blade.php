@extends('website.contenido')

@section('styles')
    <link rel="stylesheet" href="http://parsleyjs.org/src/parsley.css">
    <style>
        .control-label {
            margin-top: 8px;
        }

        .form-control {
            text-transform: uppercase;
        }

        h2 {
            font-size: 26px;
            border-radius: 10px 0px 10px 0px;
            padding: 0px 5px 8px 10px;
            background-color: #675c26;
            color: white;
        }
    </style>

@endsection
@section('body')
    <div class="post_section" style="background-color: white;padding: 15px 0 35px;margin-top:10px;">
        <div class="container">
            <div class="row">
                <div id="dvFicha" class="col-md-12" style="display:none;">
                    <div class="block-flat"
                         style="background-color: #f1f1f1;margin: 0px 30px 30px 30px;padding: 20px 30px 10px 30px;border: solid thin #d4cdcd;border-radius: 10px;">
                        <div class="header" style="background: transparent;text-align: center;">
                            <img src="/royal/img/matricula_online2.png" alt="" style='width: 70%;'>
                        </div>
                        <div class="content"
                             style="background-color: white;margin-top: 10px;padding: 10px 30px 30px 30px;border-radius: 10px;border: solid thin #e0d8b1;box-shadow: 10px 10px 15px #888888;">
                            <form id="frmFicha" role="form" data-parsley-excluded=":hidden">
                                <div class="row">
                                    <h2>1. Datos del Alumno</h2>
                                    <input type="hidden" id="hddId" value="">
                                    <input type="hidden" id="hddPem" value="">
                                    <hr style="margin-top: 5px;">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tipo de Documento</label>
                                            <div class="col-sm-4">
                                                <select id="cmbAlumno_Tipo_Documento" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                </select>
                                            </div>
                                            <label class="col-sm-2 control-label">Nro de Documento</label>
                                            <div class="col-sm-4">
                                                <input disabled=true type="text" id="txtAlumno_Numero_Documento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="8"
                                                       data-parsley-maxlength="15"
                                                       data-parsley-minlength-message="Faltan digitos"
                                                       data-toggle="tooltip" title="Ejem. 46041769">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. SÁNCHEZ">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. ASCORBE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombre completo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtAlumno_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true"
                                                       data-parsley-minlength="2" data-parsley-maxlength="50"
                                                       data-toggle="tooltip" title="Ejem. OLIVER ADRIÁN">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtAlumno_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="10"
                                                       data-parsley-maxlength="10" data-toggle="tooltip"
                                                       title="Ejem. 26/07/1989">
                                            </div>
                                            <label class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-4">
                                                <select id="cmbAlumno_Sexo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value="M">MASCULINO</option>
                                                    <option value="F">FEMENINO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Direccion</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="txtAlumno_Direccion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="200"
                                                       data-toggle="tooltip"
                                                       title="Ejem. AV. AUGUSTO B. LEGUIA 1333 URB. SAN LORENZO">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Telefono Casa</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Telf_Fijo"
                                                       class="form-control  input-sm" data-toggle="tooltip"
                                                       title="Ejem. 254276">
                                            </div>
                                            <label class="col-sm-5 control-label"><input id="chkAlumno_Padres_Juntos"
                                                                                         type="checkbox" checked> Padres
                                                viven juntos</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Colegio de Procedencia</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="txtAlumno_Colegio_Procedencia"
                                                       class="form-control  input-sm" data-toggle="tooltip"
                                                       title="Ejem. NUESTRA SEÑORA DEL ROSARIO, DE NO CONTAR CON UNO COMPLETAR CON : --">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Selecciona el Apoderado</label>
                                            <div class="col-sm-9" style="margin-top: 15px;">
                                                <label style="cursor:pointer;" class="radio-inline">
                                                    <input style='display: initial;width: 20px;height: 20px;margin-top: 0px;'
                                                           type="radio" value="P" name="rndApoderado" checked> Padre
                                                </label>
                                                <label style="cursor:pointer;" class="radio-inline">
                                                    <input style='display: initial;width: 20px;height: 20px;margin-top: 0px;'
                                                           type="radio" value="M" name="rndApoderado"> Madre
                                                </label>
                                                <label style="cursor:pointer;" class="radio-inline">
                                                    <input style='display: initial;width: 20px;height: 20px;margin-top: 0px;'
                                                           type="radio" value="O" name="rndApoderado"> Otro
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <h2>2. Datos del Padre</h2>
                                    <hr style="margin-top: 5px;">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tipo de Documento</label>
                                            <div class="col-sm-4">
                                                <select id="cmbPadre_Tipo_Documento" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                            <label class="col-sm-2 control-label">Nro de Documento</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Numero_Documento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="8"
                                                       data-parsley-maxlength="15"
                                                       data-parsley-minlength-message="Faltan digitos"
                                                       data-toggle="tooltip" title="Ejem. 46041769">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. SÁNCHEZ">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. ASCORBE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres completos</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true"
                                                       data-parsley-minlength="2" data-parsley-maxlength="50"
                                                       data-toggle="tooltip" title="Ejem. OLIVER ADRIÁN">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip" title="Fecha de Nacimiento">Fecha de Nac.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtPadre_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="10"
                                                       data-parsley-maxlength="10" data-toggle="tooltip"
                                                       title="Ejem. 26/07/1989">
                                            </div>
                                            <label class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-4">
                                                <select id="cmbPadre_Sexo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value="M">MASCULINO</option>
                                                    <option value="F">FEMENINO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Direccion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Direccion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="200"
                                                       data-toggle="tooltip"
                                                       title="Ejem. AV. AUGUSTO B. LEGUIA 1333 URB. SAN LORENZO">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Correo Electrónico</label>
                                            <div class="col-sm-10">
                                                <input type="email" id="txtPadre_Email"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="100"
                                                       data-toggle="tooltip" title="Ejem. oliver.sanchez.a@gmail.com" style="text-transform: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="9"
                                                       data-toggle="tooltip" title="Ejem. 968644416">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkPadre_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Estado Civil</label>
                                            <div class="col-sm-10">
                                                <select id="cmbPadre_Estado_Civil" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value=''>----</option>
                                                    <option value='S'>SOLTERO(A)</option>
                                                    <option value='C'>CASADO(A)</option>
                                                    <option value='V'>VIUDO(A)</option>
                                                    <option value='D'>DIVORCIADO(A)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nivel Educativo</label>
                                            <div class="col-sm-10">
                                                <select id="cmbPadre_Nivel_Educativo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Profesión u Ocupación">Profesión u Ocup.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Ocupacion"
                                                       class="form-control  input-sm" data-toggle="tooltip"
                                                       title="Ejem. PROGRAMADOR">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Lugar de Trabajo">Lugar de Trab.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Lugar_Trabajo"
                                                       class="form-control  input-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Cargo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Cargo" class="form-control  input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <h2>3. Datos de la Madre</h2>
                                    <hr style="margin-top: 5px;">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tipo de Documento</label>
                                            <div class="col-sm-4">
                                                <select id="cmbMadre_Tipo_Documento" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                            <label class="col-sm-2 control-label">Nro de Documento</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Numero_Documento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="8"
                                                       data-parsley-maxlength="15"
                                                       data-parsley-minlength-message="Faltan digitos"
                                                       data-toggle="tooltip" title="Ejem. 46041769">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. SÁNCHEZ">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. ASCORBE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres completos</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true"
                                                       data-parsley-minlength="2" data-parsley-maxlength="50"
                                                       data-toggle="tooltip" title="Ejem. OLIVER ADRIÁN">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtMadre_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="10"
                                                       data-parsley-maxlength="10" data-toggle="tooltip"
                                                       title="Ejem. 26/07/1989">
                                            </div>
                                            <label class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-4">
                                                <select id="cmbMadre_Sexo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value="M">MASCULINO</option>
                                                    <option value="F">FEMENINO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Direccion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Direccion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="200"
                                                       data-toggle="tooltip"
                                                       title="Ejem. AV. AUGUSTO B. LEGUIA 1333 URB. SAN LORENZO">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Correo Electrónico</label>
                                            <div class="col-sm-10">
                                                <input type="email" id="txtMadre_Email"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="100"
                                                       data-toggle="tooltip" title="Ejem. oliver.sanchez.a@gmail.com" style="text-transform: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="9"
                                                       data-toggle="tooltip" title="Ejem. 968644416">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkMadre_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Estado Civil</label>
                                            <div class="col-sm-10">
                                                <select id="cmbMadre_Estado_Civil" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value=''>----</option>
                                                    <option value='S'>SOLTERO(A)</option>
                                                    <option value='C'>CASADO(A)</option>
                                                    <option value='V'>VIUDO(A)</option>
                                                    <option value='D'>DIVORCIADO(A)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nivel Educativo</label>
                                            <div class="col-sm-10">
                                                <select id="cmbMadre_Nivel_Educativo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Profesión u Ocupación">Profesión u Ocup.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Ocupacion"
                                                       class="form-control  input-sm" data-toggle="tooltip"
                                                       title="Ejem. PROGRAMADOR">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Lugar de Trabajo">Lugar de Trab.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Lugar_Trabajo"
                                                       class="form-control  input-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Cargo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Cargo" class="form-control  input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="dvApoderado" style="margin-top: 30px;display:none;">
                                    <h2>4. Datos del Apoderado</h2>
                                    <hr style="margin-top: 5px;">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tipo de Documento</label>
                                            <div class="col-sm-4">
                                                <select id="cmbApoderado_Tipo_Documento" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                            <label class="col-sm-2 control-label">Nro de Documento</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Numero_Documento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="8"
                                                       data-parsley-maxlength="15"
                                                       data-parsley-minlength-message="Faltan digitos"
                                                       data-toggle="tooltip" title="Ejem. 46041769">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. SÁNCHEZ">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="2"
                                                       data-parsley-maxlength="50" data-toggle="tooltip"
                                                       title="Ejem. ASCORBE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Nombres"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-trigger="change" data-parsley-required="true"
                                                       data-parsley-minlength="2" data-parsley-maxlength="50"
                                                       data-toggle="tooltip" title="Ejem. OLIVER ADRIÁN">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtApoderado_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-minlength="10"
                                                       data-parsley-maxlength="10" data-toggle="tooltip"
                                                       title="Ejem. 26/07/1989">
                                            </div>
                                            <label class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-4">
                                                <select id="cmbApoderado_Sexo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value="M">MASCULINO</option>
                                                    <option value="F">FEMENINO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Direccion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Direccion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="200"
                                                       data-toggle="tooltip"
                                                       title="Ejem. AV. AUGUSTO B. LEGUIA 1333 URB. SAN LORENZO">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Correo Electrónico</label>
                                            <div class="col-sm-10">
                                                <input type="email" id="txtApoderado_Email"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="100"
                                                       data-toggle="tooltip" title="Ejem. oliver.sanchez.a@gmail.com" style="text-transform: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true" data-parsley-maxlength="9"
                                                       data-toggle="tooltip" title="Ejem. 968644416">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkApoderado_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Parentesco</label>
                                            <div class="col-sm-4">
                                                <select id="cmbApoderado_Parentesco" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                </select>
                                            </div>
                                            <label class="col-sm-2 control-label">Estado Civil</label>
                                            <div class="col-sm-4">
                                                <select id="cmbApoderado_Estado_Civil" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">
                                                    <option value=''>----</option>
                                                    <option value='S'>SOLTERO(A)</option>
                                                    <option value='C'>CASADO(A)</option>
                                                    <option value='V'>VIUDO(A)</option>
                                                    <option value='D'>DIVORCIADO(A)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nivel Educativo</label>
                                            <div class="col-sm-10">
                                                <select id="cmbApoderado_Nivel_Educativo" class="form-control  input-sm"
                                                        data-parsley-trigger="change" data-parsley-required="true">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Profesión u Ocupación">Profesión u Ocup.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Ocupacion"
                                                       class="form-control  input-sm" data-toggle="tooltip"
                                                       title="Ejem. PROGRAMADOR">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label" data-toggle="tooltip"
                                                   title="Lugar de Trabajo">Lugar de Trab.</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Lugar_Trabajo"
                                                       class="form-control  input-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Cargo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Cargo" class="form-control  input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style='text-align:center;margin-top:15px;'>
                                <button onclick="cancelar()" type="button" class="btn btn-default" style="float:right;font-size:18px;"><i class="fa fa-chevron-right"></i> Volver a Login</button>
                                <button onclick="finalizar()" type="button" class="btn btn-success" style="float:right;font-size:18px;" data-toggle="tooltip" data-html="true" title="Haz click para finalizar,<br> Recuerda: después no se podrán volver a editar los datos">Finalizar</button>
                                <button onclick="guardar()" type="button" class="btn btn-primary" style="font-size:18px;" data-toggle="tooltip" title="Haz click para guardar tu avance">Guardar datos</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="dvLogin" class="col-md-offset-3 col-md-6">
                    <div class="block-flat"
                         style="margin: 30px;padding: 30px;border:solid 1.4px #ace0f8; border-radius: 15px;background-image: url(/royal/img/sun2.jpg); background-repeat: round;    background-size: cover;box-shadow: 10px 10px 5px #888888;">
                        <div class="header" style="background: transparent;">
                            <img src="/royal/img/persona_ficha.png"
                                 style="width: 100px;height: 107px;margin-top: -73px;">
                            <h2 style="text-align: center;width: 300px;display: inline-block;">INGRESA TUS DATOS PARA
                                EMPEZAR</h2></div>
                        <div class="content" style="margin-top:10px;">
                            <form id="frmLogin" role="form">
                                <div class="form-group">
                                    <label>INGRESA DNI DEL ALUMNO</label>
                                    <input id="txtPersona_Numero_Documento" type="text"
                                           class="form-control" style="font-size: 25px;" data-parsley-trigger="change"
                                           data-parsley-required="true" data-parsley-minlength="8"
                                           data-parsley-maxlength="15" data-parsley-minlength-message="Faltan digitos">
                                </div>
                                <div class="form-group">
                                    <label>INGRESA PEM <code>(Sino posee este codigo, solicitelo en el
                                            colegio)</code></label>
                                    <input id="txtPem" type="text" class="form-control"
                                           style="text-transform: uppercase;font-size: 25px;"
                                           data-parsley-trigger="change"
                                           data-parsley-required="true" data-parsley-minlength-message="Faltan digitos">
                                </div>
                                <button onclick="buscarFicha()" type="button" class="btn btn-primary btn-block"
                                        style="font-size:18px;">CLICK PARA CONTINUAR
                                </button>
                            </form>
                        </div>
                    </div>
                </div><!--end post_left-->
            </div>
        </div>
    </div>
    <div id="msg_error"></div>

    <div id="modMsje" tabindex="-1" role="dialog" class="modal fade in" style="display: none;" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <table style="width:100%;">
                            <tr>
                                <td><img src="/royal/img/persona_ficha.png" style="width: 100px;height: 107px;"></td>
                                <td style="text-align: left;">
                                    <h3>Todo Correcto!</h3>
                                    <p style="font-size: 17px;">Los cambios fueron guardados satisfactoriamente!</p>
                                    <button type="button" data-dismiss="modal" class="btn btn-success" style="float: right;">Entendido</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><!-- /.modal-content-->
        </div>
        <!-- /.modal-dialog-->
    </div>
@endsection

@section('scripts')
    <script src="http://parsleyjs.org/dist/parsley.js"></script>


    <script>

        function mostrar_error(html) {
            var pag = $("#msg_error");
            pag.append(html);
            var errores = $(pag).find('.exception_message');
            var errors_title = [];
            var errors_detail = [];
            $.each(errores, function (index, value) {
                errors_title.push($(value).html().split("<br>")[0]);
                errors_detail.push($(value).html().split("<br>")[1]);
            });
            errors_title = $.unique(errors_title);
            $.each(errors_title, function (index, value) {
                console.log(value);
            });
            pag.html("");
            return errors_title;
        }

        $(document).on('ready', function () {
            $('#frmFicha').parsley();
            $('#frmLogin').parsley();
            $('[data-toggle="tooltip"]').tooltip();
            listarTipoDocumento();
            listarNivelEducativo();
            listarParentesco();

            $("input[name='rndApoderado']").on('change', function () {
                var opcion = $(this).val();
                if (opcion == "O") {
                    $("#dvApoderado").show();
                } else {
                    $("#dvApoderado").hide();
                }
            });

            prueba_login();
        });

        function prueba_login() {
            $("#txtPersona_Numero_Documento").val("46041769");
            $("#txtPem").val("766XWU9M");
        }

        function prueba_ficha() {
            $("#cmbAlumno_Tipo_Documento").val("1");
            $("#txtAlumno_Numero_Documento").val("46041769");
            $("#txtAlumno_Apellido_Paterno").val("SÁNCHEZ");
            $("#txtAlumno_Apellido_Materno").val("ASCORBE");
            $("#txtAlumno_Nombres").val("OLIVER ADRIÁN");
            $("#txtAlumno_Fecha_Nacimiento").val("1989-07-26");
            $("#cmbAlumno_Sexo").val("M");
            $("#txtAlumno_Direccion").val("AV. AUGUSTO B. LEGUIA 1396");
            $("#chkAlumno_Padres_Juntos").prop('checked', true);

            $("#cmbPadre_Tipo_Documento").val("1");
            $("#txtPadre_Numero_Documento").val("11111111");
            $("#txtPadre_Apellido_Paterno").val("SÁNCHEZ");
            $("#txtPadre_Apellido_Materno").val("TEMOCHE");
            $("#txtPadre_Nombres").val("OSWALDO");
            $("#txtPadre_Fecha_Nacimiento").val("1969-07-26");
            $("#cmbPadre_Sexo").val("M");
            $("#txtPadre_Direccion").val("AV. AUGUSTO B. LEGUIA 1396");
            $("#txtPadre_Email").val("papa@gmail.com");
            $("#txtPadre_Telf_Movil").val("96864411");
            $("#chkPadre_Vive_Educando").prop('checked', true);
            $("#cmbPadre_Nivel_Educativo").val("15");
            $("#cmbPadre_Estado_Civil").val("C");

            $("#cmbMadre_Tipo_Documento").val("1");
            $("#txtMadre_Numero_Documento").val("11111111");
            $("#txtMadre_Apellido_Paterno").val("ASCORBE");
            $("#txtMadre_Apellido_Materno").val("ESTELA");
            $("#txtMadre_Nombres").val("JANE");
            $("#txtMadre_Fecha_Nacimiento").val("1969-07-26");
            $("#cmbMadre_Sexo").val("F");
            $("#txtMadre_Direccion").val("AV. AUGUSTO B. LEGUIA 1396");
            $("#txtMadre_Email").val("mama@gmail.com");
            $("#txtMadre_Telf_Movil").val("96864412");
            $("#chkMadre_Vive_Educando").prop('checked', true);
            $("#cmbMadre_Nivel_Educativo").val("1");
            $("#cmbMadre_Estado_Civil").val("C");

            /*
            $("#cmbApoderado_Tipo_Documento").val(data["apoderado_tipo_documento_id"]);
            $("#txtApoderado_Numero_Documento").val(data["apoderado_numero_documento"]);
            $("#txtApoderado_Apellido_Paterno").val(data["apoderado_apellido_paterno"]);
            $("#txtApoderado_Apellido_Materno").val(data["apoderado_apellido_materno"]);
            $("#txtApoderado_Nombres").val(data["apoderado_nombres"]);
            $("#txtApoderado_Fecha_Nacimiento").val(data["apoderado_fecha_nacimiento"]);
            $("#cmbApoderado_Sexo").val(data["apoderado_sexo"]);
            $("#txtApoderado_Direccion").val(data["apoderado_direccion"]);
            $("#txtApoderado_Email").val(data["apoderado_email"]);
            $("#txtApoderado_Telf_Movil").val(data["apoderado_telf_movil"]);
            $("#chkApoderado_Vive_Educando").prop('checked', data["alumno_vive_educando"]);
            $("#txtApoderado_Ocupacion").val(data["apoderado_ocupacion"]);
            $("#cmbApoderado_Nivel_Educativo").val(data["apoderado_nivel_educativo_id"]);
            $("#txtApoderado_Lugar_Trabajo").val(data["apoderado_lugar_trabajo"]);
            $("#txtApoderado_Cargo").val(data["apoderado_cargo"]);
            $("#cmbApoderado_Estado_Civil").val(data["apoderado_estado_civil"]);
             $("#cmbApoderado_Parentesco").val(data["apoderado_parentesco_id"]);
            */
        }

        function cancelar() {
            $("#dvLogin").show();
            $("#dvFicha").hide();

            $("#hddPem").val("");
            $("#txtPem").val("");
            $("#txtPersona_Numero_Documento").val("");
            $("#cmbAlumno_Tipo_Documento").val("");
            $("#txtAlumno_Numero_Documento").val("");
            $("#txtAlumno_Apellido_Paterno").val("");
            $("#txtAlumno_Apellido_Materno").val("");
            $("#txtAlumno_Nombres").val("");
            $("#txtAlumno_Fecha_Nacimiento").val("");
            $("#cmbAlumno_Sexo").val("");
            $("#txtAlumno_Direccion").val("");
            $("#txtAlumno_Telf_Fijo").val("");
            $("#chkAlumno_Padres_Juntos").prop('checked', true);
            $("#txtAlumno_Colegio_Procedencia").val("");

            $("#cmbPadre_Tipo_Documento").val("");
            $("#txtPadre_Numero_Documento").val("");
            $("#txtPadre_Apellido_Paterno").val("");
            $("#txtPadre_Apellido_Materno").val("");
            $("#txtPadre_Nombres").val("");
            $("#txtPadre_Fecha_Nacimiento").val("");
            $("#cmbPadre_Sexo").val("");
            $("#txtPadre_Direccion").val("");
            $("#txtPadre_Email").val("");
            $("#txtPadre_Telf_Movil").val("");
            $("#chkPadre_Vive_Educando").prop('checked', true);
            $("#txtPadre_Ocupacion").val("");
            $("#cmbPadre_Nivel_Educativo").val("");
            $("#txtPadre_Lugar_Trabajo").val("");
            $("#txtPadre_Cargo").val("");
            $("#cmbPadre_Estado_Civil").val("");

            $("#cmbMadre_Tipo_Documento").val("");
            $("#txtMadre_Numero_Documento").val("");
            $("#txtMadre_Apellido_Paterno").val("");
            $("#txtMadre_Apellido_Materno").val("");
            $("#txtMadre_Nombres").val("");
            $("#txtMadre_Fecha_Nacimiento").val("");
            $("#cmbMadre_Sexo").val("");
            $("#txtMadre_Direccion").val("");
            $("#txtMadre_Email").val("");
            $("#txtMadre_Telf_Movil").val("");
            $("#chkMadre_Vive_Educando").prop('checked', true);
            $("#txtMadre_Ocupacion").val("");
            $("#cmbMadre_Nivel_Educativo").val("");
            $("#txtMadre_Lugar_Trabajo").val("");
            $("#txtMadre_Cargo").val("");
            $("#cmbMadre_Estado_Civil").val("");

            $("#cmbApoderado_Tipo_Documento").val("");
            $("#txtApoderado_Numero_Documento").val("");
            $("#txtApoderado_Apellido_Paterno").val("");
            $("#txtApoderado_Apellido_Materno").val("");
            $("#txtApoderado_Nombres").val("");
            $("#txtApoderado_Fecha_Nacimiento").val("");
            $("#cmbApoderado_Sexo").val("");
            $("#txtApoderado_Direccion").val("");
            $("#txtApoderado_Email").val("");
            $("#txtApoderado_Telf_Movil").val("");
            $("#chkApoderado_Vive_Educando").prop('checked', true);
            $("#txtApoderado_Ocupacion").val("");
            $("#cmbApoderado_Nivel_Educativo").val("");
            $("#txtApoderado_Lugar_Trabajo").val("");
            $("#txtApoderado_Cargo").val("");
            $("#cmbApoderado_Estado_Civil").val("");

            $("#cmbApoderado_Parentesco").val("");

        }

        function imprimir(elem) {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>' + document.title + '</title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h1>' + document.title + '</h1>');
            mywindow.document.write(document.getElementById("dvFicha").innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        }

        function obtenerDatos(){
            var trabajador_id = $("#cmbTrabajador").val();
            var info = [{"_token": "{{ csrf_token() }}",
                "pem": $("#hddPem").val(),
                "alumno_tipo_documento_id":  $("#cmbAlumno_Tipo_Documento").val(),
                "alumno_numero_documento": $("#txtAlumno_Numero_Documento").val(),
                "alumno_apellido_paterno": $("#txtAlumno_Apellido_Paterno").val().toUpperCase(),
                "alumno_apellido_materno": $("#txtAlumno_Apellido_Materno").val().toUpperCase(),
                "alumno_nombres": $("#txtAlumno_Nombres").val().toUpperCase(),
                "alumno_fecha_nacimiento": $("#txtAlumno_Fecha_Nacimiento").val(),
                "alumno_sexo": $("#cmbAlumno_Sexo").val(),
                "alumno_direccion": $("#txtAlumno_Direccion").val().toUpperCase(),
                "alumno_telf_fijo": $("#txtAlumno_Telf_Fijo").val().toUpperCase(),
                "alumno_padres_juntos": $("#chkAlumno_Padres_Juntos").is(":checked"),
                "alumno_colegio_procedencia":$("#txtAlumno_Colegio_Procedencia").val().toUpperCase(),
                "alumno_apoderado": $("input[name='rndApoderado']:checked").val(),

                "padre_tipo_documento_id": $("#cmbPadre_Tipo_Documento").val(),
                "padre_numero_documento": $("#txtPadre_Numero_Documento").val(),
                "padre_apellido_paterno": $("#txtPadre_Apellido_Paterno").val().toUpperCase(),
                "padre_apellido_materno": $("#txtPadre_Apellido_Materno").val().toUpperCase(),
                "padre_nombres": $("#txtPadre_Nombres").val().toUpperCase(),
                "padre_fecha_nacimiento": $("#txtPadre_Fecha_Nacimiento").val(),
                "padre_sexo": $("#cmbPadre_Sexo").val(),
                "padre_direccion": $("#txtPadre_Direccion").val().toUpperCase(),
                "padre_email": $("#txtPadre_Email").val(),
                "padre_telf_movil": $("#txtPadre_Telf_Movil").val(),
                "padre_vive_educando": $("#chkPadre_Vive_Educando").is(":checked"),
                "padre_estado_civil": $("#cmbPadre_Estado_Civil").val(),
                "padre_nivel_educativo_id": $("#cmbPadre_Nivel_Educativo").val(),
                "padre_ocupacion": $("#txtPadre_Ocupacion").val().toUpperCase(),
                "padre_lugar_trabajo": $("#txtPadre_Lugar_Trabajo").val().toUpperCase(),
                "padre_cargo": $("#txtPadre_Cargo").val().toUpperCase(),

                "madre_tipo_documento_id": $("#cmbMadre_Tipo_Documento").val(),
                "madre_numero_documento": $("#txtMadre_Numero_Documento").val(),
                "madre_apellido_paterno": $("#txtMadre_Apellido_Paterno").val().toUpperCase(),
                "madre_apellido_materno": $("#txtMadre_Apellido_Materno").val().toUpperCase(),
                "madre_nombres": $("#txtMadre_Nombres").val().toUpperCase(),
                "madre_fecha_nacimiento": $("#txtMadre_Fecha_Nacimiento").val(),
                "madre_sexo": $("#cmbMadre_Sexo").val(),
                "madre_direccion": $("#txtMadre_Direccion").val().toUpperCase(),
                "madre_email": $("#txtMadre_Email").val(),
                "madre_telf_movil": $("#txtMadre_Telf_Movil").val(),
                "madre_vive_educando": $("#chkMadre_Vive_Educando").is(":checked"),
                "madre_estado_civil": $("#cmbMadre_Estado_Civil").val(),
                "madre_nivel_educativo_id": $("#cmbMadre_Nivel_Educativo").val(),
                "madre_ocupacion": $("#txtMadre_Ocupacion").val().toUpperCase(),
                "madre_lugar_trabajo": $("#txtMadre_Lugar_Trabajo").val().toUpperCase(),
                "madre_cargo": $("#txtMadre_Cargo").val().toUpperCase(),

                "apoderado_tipo_documento_id": $("#cmbApoderado_Tipo_Documento").val(),
                "apoderado_numero_documento": $("#txtApoderado_Numero_Documento").val(),
                "apoderado_apellido_paterno": $("#txtApoderado_Apellido_Paterno").val().toUpperCase(),
                "apoderado_apellido_materno": $("#txtApoderado_Apellido_Materno").val().toUpperCase(),
                "apoderado_nombres": $("#txtApoderado_Nombres").val().toUpperCase(),
                "apoderado_fecha_nacimiento": $("#txtApoderado_Fecha_Nacimiento").val(),
                "apoderado_sexo": $("#cmbApoderado_Sexo").val(),
                "apoderado_direccion": $("#txtApoderado_Direccion").val().toUpperCase(),
                "apoderado_email": $("#txtApoderado_Email").val(),
                "apoderado_telf_movil": $("#txtApoderado_Telf_Movil").val(),
                "apoderado_vive_educando": $("#chkApoderado_Vive_Educando").is(":checked"),
                "apoderado_estado_civil": $("#cmbApoderado_Estado_Civil").val(),
                "apoderado_nivel_educativo_id": $("#cmbApoderado_Nivel_Educativo").val(),
                "apoderado_ocupacion": $("#txtApoderado_Ocupacion").val().toUpperCase(),
                "apoderado_lugar_trabajo": $("#txtApoderado_Lugar_Trabajo").val().toUpperCase(),
                "apoderado_cargo": $("#txtApoderado_Cargo").val().toUpperCase(),
                "apoderado_parentesco_id": $("#cmbApoderado_Parentesco").val()

            }][0];
            return info;
        }

        function guardar() {
            if ($("#frmFicha").parsley().validate()) {
                if (confirm("¿Deseas continuar la modificación?")) {
                    var info = obtenerDatos();
                    $.ajax({
                        url: "/intranet/mantenimientos/ficha_matricula/" + $("#hddId").val(),
                        type: "PUT",
                        data: info,
                        beforeSend: function () {
                            $("#loading").show();
                            console.log(info);
                        },
                        success: function (data) {
                            $("#modMsje").modal('show');
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
        }

        function buscarFicha() {
            if ($("#frmLogin").parsley().validate()) {
                var info = [{
                    "_token": "{{ csrf_token() }}",
                    "pem": $("#txtPem").val(),
                    "alumno_numero_documento": $("#txtPersona_Numero_Documento").val()
                }][0];
                $.ajax({
                    url: "/intranet/mantenimientos/ficha_matricula/buscar",
                    type: "GET",
                    data: info,
                    beforeSend: function () {
                        $("#loading").show();
                    },
                    success: function (data) {
                        if (data != null && data != "") {
                            data = data[0];
                            if (data["tipo_matricula"] == "P") {
                                $("#cmbAlumno_Tipo_Documento").prop('disabled', true);
                                $("#cmbAlumno_Numero_Documento").prop('disabled', true);
                                $("#txtAlumno_Apellido_Paterno").prop('disabled', true);
                                $("#txtAlumno_Apellido_Materno").prop('disabled', true);
                                $("#txtAlumno_Nombres").prop('disabled', true);
                                $("#txtAlumno_Fecha_Nacimiento").prop('disabled', true);
                                $("#cmbAlumno_Sexo").prop('disabled', true);
                                $("#txtAlumno_Colegio_Procedencia").prop('disabled', true);

                                $("#cmbPadre_Tipo_Documento").prop('disabled', true);
                                $("#cmbPadre_Numero_Documento").prop('disabled', true);
                                $("#txtPadre_Apellido_Paterno").prop('disabled', true);
                                $("#txtPadre_Apellido_Materno").prop('disabled', true);
                                $("#txtPadre_Nombres").prop('disabled', true);
                                $("#txtPadre_Fecha_Nacimiento").prop('disabled', true);
                                $("#cmbPadre_Sexo").prop('disabled', true);

                                $("#cmbMadre_Tipo_Documento").prop('disabled', true);
                                $("#cmbMadre_Numero_Documento").prop('disabled', true);
                                $("#txtMadre_Apellido_Paterno").prop('disabled', true);
                                $("#txtMadre_Apellido_Materno").prop('disabled', true);
                                $("#txtMadre_Nombres").prop('disabled', true);
                                $("#txtMadre_Fecha_Nacimiento").prop('disabled', true);
                                $("#cmbMadre_Sexo").prop('disabled', true);
                            }
                            $("#hddId").val(data["id"]);
                            $("#hddPem").val(data["pem"]);
                            $("#cmbAlumno_Tipo_Documento").val(data["alumno_tipo_documento_id"]);
                            $("#txtAlumno_Numero_Documento").val(data["alumno_numero_documento"]);
                            $("#txtAlumno_Apellido_Paterno").val(data["alumno_apellido_paterno"]);
                            $("#txtAlumno_Apellido_Materno").val(data["alumno_apellido_materno"]);
                            $("#txtAlumno_Nombres").val(data["alumno_nombres"]);
                            $("#txtAlumno_Fecha_Nacimiento").val(data["alumno_fecha_nacimiento"]);
                            $("#cmbAlumno_Sexo").val(data["alumno_sexo"]);
                            $("#txtAlumno_Direccion").val(data["alumno_direccion"]);
                            $("#txtAlumno_Telf_Fijo").val(data["alumno_telf_fijo"]);
                            $("#chkAlumno_Padres_Juntos").prop('checked', data["alumno_padres_juntos"]);
                            $("#txtAlumno_Colegio_Procedencia").val(data["alumno_colegio_procedencia"]);
                            $("input[name='rndApoderado']").filter('[value='+data["alumno_apoderado"]+']').click();

                            $("#cmbPadre_Tipo_Documento").val(data["padre_tipo_documento_id"]);
                            $("#txtPadre_Numero_Documento").val(data["padre_numero_documento"]);
                            $("#txtPadre_Apellido_Paterno").val(data["padre_apellido_paterno"]);
                            $("#txtPadre_Apellido_Materno").val(data["padre_apellido_materno"]);
                            $("#txtPadre_Nombres").val(data["padre_nombres"]);
                            $("#txtPadre_Fecha_Nacimiento").val(data["padre_fecha_nacimiento"]);
                            $("#cmbPadre_Sexo").val(data["padre_sexo"]);
                            $("#txtPadre_Direccion").val(data["padre_direccion"]);
                            $("#txtPadre_Email").val(data["padre_email"]);
                            $("#txtPadre_Telf_Movil").val(data["padre_telf_movil"]);
                            $("#chkPadre_Vive_Educando").prop('checked', data["alumno_vive_educando"]);
                            $("#txtPadre_Ocupacion").val(data["padre_ocupacion"]);
                            $("#cmbPadre_Nivel_Educativo").val(data["padre_nivel_educativo_id"]);
                            $("#txtPadre_Lugar_Trabajo").val(data["padre_lugar_trabajo"]);
                            $("#txtPadre_Cargo").val(data["padre_cargo"]);
                            $("#cmbPadre_Estado_Civil").val(data["padre_estado_civil"]);

                            $("#cmbMadre_Tipo_Documento").val(data["madre_tipo_documento_id"]);
                            $("#txtMadre_Numero_Documento").val(data["madre_numero_documento"]);
                            $("#txtMadre_Apellido_Paterno").val(data["madre_apellido_paterno"]);
                            $("#txtMadre_Apellido_Materno").val(data["madre_apellido_materno"]);
                            $("#txtMadre_Nombres").val(data["madre_nombres"]);
                            $("#txtMadre_Fecha_Nacimiento").val(data["madre_fecha_nacimiento"]);
                            $("#cmbMadre_Sexo").val(data["madre_sexo"]);
                            $("#txtMadre_Direccion").val(data["madre_direccion"]);
                            $("#txtMadre_Email").val(data["madre_email"]);
                            $("#txtMadre_Telf_Movil").val(data["madre_telf_movil"]);
                            $("#chkMadre_Vive_Educando").prop('checked', data["alumno_vive_educando"]);
                            $("#txtMadre_Ocupacion").val(data["madre_ocupacion"]);
                            $("#cmbMadre_Nivel_Educativo").val(data["madre_nivel_educativo_id"]);
                            $("#txtMadre_Lugar_Trabajo").val(data["madre_lugar_trabajo"]);
                            $("#txtMadre_Cargo").val(data["madre_cargo"]);
                            $("#cmbMadre_Estado_Civil").val(data["madre_estado_civil"]);

                            $("#cmbApoderado_Tipo_Documento").val(data["apoderado_tipo_documento_id"]);
                            $("#txtApoderado_Numero_Documento").val(data["apoderado_numero_documento"]);
                            $("#txtApoderado_Apellido_Paterno").val(data["apoderado_apellido_paterno"]);
                            $("#txtApoderado_Apellido_Materno").val(data["apoderado_apellido_materno"]);
                            $("#txtApoderado_Nombres").val(data["apoderado_nombres"]);
                            $("#txtApoderado_Fecha_Nacimiento").val(data["apoderado_fecha_nacimiento"]);
                            $("#cmbApoderado_Sexo").val(data["apoderado_sexo"]);
                            $("#txtApoderado_Direccion").val(data["apoderado_direccion"]);
                            $("#txtApoderado_Email").val(data["apoderado_email"]);
                            $("#txtApoderado_Telf_Movil").val(data["apoderado_telf_movil"]);
                            $("#chkApoderado_Vive_Educando").prop('checked', data["alumno_vive_educando"]);
                            $("#txtApoderado_Ocupacion").val(data["apoderado_ocupacion"]);
                            $("#cmbApoderado_Nivel_Educativo").val(data["apoderado_nivel_educativo_id"]);
                            $("#txtApoderado_Lugar_Trabajo").val(data["apoderado_lugar_trabajo"]);
                            $("#txtApoderado_Cargo").val(data["apoderado_cargo"]);
                            $("#cmbApoderado_Estado_Civil").val(data["apoderado_estado_civil"]);

                            $("#cmbApoderado_Parentesco").val(data["apoderado_parentesco_id"]);

                            $("#dvLogin").hide();
                            $("#dvFicha").show();
                        } else {
                            alert('Datos incorrectos');
                        }
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

        function listarNivelEducativo() {
            $.ajax({
                url: "/intranet/mantenimientos/nivel_educativo/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data, function (index, value) {
                        opciones += "<option value='" + value["id"] + "'>" + value["descripcion"] + "</option>";
                    });
                    $("#cmbPadre_Nivel_Educativo").append(opciones);
                    $("#cmbMadre_Nivel_Educativo").append(opciones);
                    $("#cmbApoderado_Nivel_Educativo").append(opciones);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });

        }

        function listarTipoDocumento() {
            $.ajax({
                url: "/intranet/mantenimientos/tipo_documento/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data, function (index, value) {
                        opciones += "<option value='" + value["id"] + "'>" + value["abreviatura"] + "</option>";
                    });
                    $("#cmbAlumno_Tipo_Documento").append(opciones);
                    $("#cmbPadre_Tipo_Documento").append(opciones);
                    $("#cmbMadre_Tipo_Documento").append(opciones);
                    $("#cmbApoderado_Tipo_Documento").append(opciones);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                },
                complete: function () {
                    $("#loading").hide();
                }
            });

        }

        function listarParentesco() {
            $.ajax({
                url: "/intranet/mantenimientos/parentesco/*",
                type: "GET",
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    var opciones = "<option value=''>---</option>";
                    $.each(data, function (index, value) {
                        opciones += "<option value='" + value["id"] + "'>" + value["nombre"] + "</option>";
                    });
                    $("#cmbApoderado_Parentesco").append(opciones);
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
