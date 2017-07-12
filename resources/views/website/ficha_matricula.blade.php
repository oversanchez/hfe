@extends('website.contenido')

@section('styles')
    <style>
        .control-label {
            margin-top: 8px;
        }
        h2{
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
                <div id="dvFicha" class="col-md-12">
                    <div class="block-flat" style="background-color: #f1f1f1;margin: 0px 30px 30px 30px;padding: 20px 30px 10px 30px;border: solid thin #d4cdcd;border-radius: 10px;">
                        <div class="header" style="background: transparent;text-align: center;">
                            <img src="/royal/img/matricula_online2.png" alt="" style='width: 70%;'>
                        </div>
                        <div class="content" style="background-color: white;margin-top: 10px;padding: 10px 30px 30px 30px;border-radius: 10px;border: solid thin #e0d8b1;box-shadow: 10px 10px 15px #888888;">
                            <form id="frmFicha" role="form">
                                <div class="row">
                                    <h2>1. Datos del Alumno</h2>
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
                                                <input type="text" id="txtAlumno_Numero_Documento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombre completo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtAlumno_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtAlumno_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Telefono Casa</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtAlumno_Telf_Fijo"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-5 control-label"><input id="chkAlumno_Padres_Juntos"
                                                                                         type="checkbox" checked> Padres
                                                viven juntos</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Colegio de Procedencia</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="txtAlumno_Colegio_Procedencia"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Selecciona el Apoderado</label>
                                            <div class="col-sm-9" style="margin-top: 15px;">
                                                <label class="radio-inline">
                                                    <input style='display:initial;' type="radio"  value="P" name="rndApoderado" checked> Padre
                                                </label>
                                                <label class="radio-inline">
                                                    <input style='display:initial;' type="radio"  value="M" name="rndApoderado"> Madre
                                                </label>
                                                <label class="radio-inline">
                                                    <input style='display:initial;' type="radio" value="O" name="rndApoderado"> Otro
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres completos</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtPadre_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtPadre_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkPadre_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Ocupacion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Ocupacion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                            <label class="col-sm-2 control-label">Lugar de Trabajo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtPadre_Lugar_Trabajo"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres completos</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Nombres" class="form-control  input-sm"
                                                       data-parsley-trigger="change" data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtMadre_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtMadre_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkMadre_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Ocupacion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Ocupacion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                            <label class="col-sm-2 control-label">Lugar de Trabajo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtMadre_Lugar_Trabajo"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
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
                                    </div>
                                </div>
                                <div id="dvApoderado" class="row" style="margin-top: 30px;display:none;">
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Apellido_Paterno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Apellido_Materno"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Nombres</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Nombres"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Fecha de Nacimiento.</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtApoderado_Fecha_Nacimiento"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Celular Personal</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApoderado_Telf_Movil"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
                                            <label class="col-sm-6 control-label"><input id="chkApoderado_Vive_Educando"
                                                                                         type="checkbox" checked> Vive
                                                con el estudiante</label>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Ocupacion</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Ocupacion"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
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
                                            <label class="col-sm-2 control-label">Lugar de Trabajo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="txtApoderado_Lugar_Trabajo"
                                                       class="form-control  input-sm" data-parsley-trigger="change"
                                                       data-parsley-required="true">
                                            </div>
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
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style='text-align:center;margin-top:15px;'>
                                <button onclick="guardar()" type="button" class="btn btn-primary"
                                        style="font-size:18px;">Guardar todos los datos
                                </button>
                                <button onclick="descargar()" type="button" class="btn btn-default"
                                        style="font-size:18px;"><i class="fa fa-download"></i>Descargar
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="dvLogin" class="col-md-offset-3 col-md-6" style="display:none;">
                    <div class="block-flat"
                         style="margin: 30px;padding: 30px;border:solid 1.4px #ace0f8; border-radius: 15px;background-image: url(/royal/img/sun2.jpg); background-repeat: round;    background-size: cover;box-shadow: 10px 10px 5px #888888;">
                        <div class="header" style="background: transparent;">
                            <img src="/royal/img/persona_ficha.png"
                                 style="width: 100px;height: 107px;margin-top: -73px;">
                            <h2 style="text-align: center;width: 300px;display: inline-block;">INGRESA TUS DATOS PARA
                                EMPEZAR</h2></div>
                        <div class="content" style="margin-top:10px;">
                            <form role="form">
                                <div class="form-group">
                                    <label>INGRESA DNI DEL ALUMNO</label>
                                    <input type="text" class="form-control" style="font-size: 25px;">
                                </div>
                                <div class="form-group">
                                    <label>INGRESA PEM <code>(Sino posee este codigo, solicitelo en el
                                            colegio)</code></label>
                                    <input type="text" class="form-control"
                                           style="text-transform: uppercase;font-size: 25px;">
                                </div>
                                <button onclick="validar()" type="button" class="btn btn-primary btn-block"
                                        style="font-size:18px;">CLICK PARA CONTINUAR
                                </button>
                            </form>
                        </div>
                    </div>
                </div><!--end post_left-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function cancelar() {
            $("#dvLogin").show();
            $("#dvFicha").hide();
        }
        function validar() {
            $("#dvLogin").hide();
            $("#dvFicha").show();
        }
        $(document).on('ready', function () {
            listarTipoDocumento();
            listarNivelEducativo();
            listarParentesco();

            $("input[name='rndApoderado']").on('change',function(){
                var opcion = $(this).val();
                if(opcion == "O"){
                    $("#dvApoderado").show();
                }else{
                    $("#dvApoderado").hide();
                }
            });
        });



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