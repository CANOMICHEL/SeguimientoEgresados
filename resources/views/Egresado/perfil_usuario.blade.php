@extends('Egresado.panel')
@section('contenido')
<div class="container">
        <div class="row">
            <form method="post" id="perfil">
                <div class="col-xs-9">
                    <div class="panel panel-success"><br>
                        <h2 class="panel-title">
                            <center>
                                <font size="5"><i class='glyphicon glyphicon-user'></i>PERFIL</font>
                            </center>
                        </h2>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <div id="load_img">
                                        <img class="img-responsive" src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-users-vector-icon-png-image_3725294.jpg" alt="Logo">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <td class='col-md-3'>Nombres y Apellidos:</td>
                                                <td><input type="text" class="form-control input-sm" name="nombre_apellido" ></td>
                                            </tr>
                                            <tr>
                                                <td>Ocupación:</td>
                                                <td><input type="text" class="form-control input-sm" name="ocupacion" ></td>
                                            </tr>
                                            <tr>
                                                <td>Correo electrónico:</td>
                                                <td><input type="email" class="form-control input-sm" name="correo"></td>
                                            </tr>
                                            <tr>
                                                <td>Telefono:</td>
                                                <td><input type="text" class="form-control input-sm" required name="telefono"></td>
                                            </tr>

                                            <tr>
                                                <td>salario que desea:</td>
                                                <td><input type="text" class="form-control input-sm" required name="salario"></td>
                                            </tr>

                                            <tr>
                                                <td>Idiomas:</td>
                                                <td><input type="text" class="form-control input-sm" name="idioma"></td>
                                            </tr>
                                            <tr>
                                                <td>Ciudad:</td>
                                                <td><input type="text" class="form-control input-sm" name="ciudad"></td>
                                            </tr>
                                            <tr>
                                                <td>Codigo Postal:</td>
                                                <td><input type="text" class="form-control input-sm" name="codigo_postal"></td>
                                            </tr>
                                            <tr>
                                                <td>Expectativas</td>
                                                <td><input type="text" class="form-control input-sm" name="expectativa"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class='col-md-9'></div>
                                <!-- Carga los datos ajax -->
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar perfil</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
@endsection
