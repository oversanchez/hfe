@extends('website.contenido')

@section('body')
    <div class="post_section" style="background-color: white;padding: 15px 0 35px;margin-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-xs-6 col-sm-6">
                    <div class="block-flat" style="margin: 30px;border: solid 2px black;padding: 30px;border-radius: 20px;background-color: beige;">
                        <div class="header" style="margin-bottom: 30px;background-color: beige;">
                            <img src="/royal/img/security.png" style="height: 70px;margin-top: -43px;">
                            <h2 style="text-align: center;width: 300px;display: inline-block;">INGRESA TUS DATOS PARA EMPEZAR</h2></div>
                        <div class="content" style="margin-top:10px;">
                            <form role="form">
                                <div class="form-group">
                                    <label>INGRESA DNI DEL ALUMNO</label>
                                    <input type="text" class="form-control" style="font-size: 25px;">
                                </div>
                                <div class="form-group">
                                    <label>INGRESA PEM <code>(Sino posee este codigo, solicitelo en el colegio)</code></label>
                                    <input type="text"  class="form-control" style="font-size: 25px;">
                                </div>
                                <button type="button" class="btn btn-primary btn-block" style="font-size:18px;">CLICK PARA CONTINUAR</button>
                            </form>
                        </div>
                    </div>
                </div><!--end post_left-->
            </div>
        </div>
    </div>
@endsection