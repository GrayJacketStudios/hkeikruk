@extends('layouts/template')


@section('specialBundle')
<script src="{{asset('js/SalsaCalendar.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/SalsaCalendar.min.css')}}">
@endsection

@section('contenido')


<div class="container">

        <div class="heading">
            <center>
                <h2>
                    Crear una reserva
                </h2>
            </center>
        </div>
        <div class="row">
            <div class="col-sm-11">
                <form>
                <h5>Datos personales</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre/s</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">Apellido/s</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido..." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Correo">Correo electronico</label>
                        <input type="text" class="form-control" id="Correo" placeholder="Correo electronico" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Telefono">Telefono</label>
                        <input type="text" class="form-control" id="Telefono" placeholder="Ejemplo: +56 9 1234 5678" required>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Pais">Pais de origen</label>
                        <input type="text" class="form-control" id="Pais" placeholder="Pais" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Dirección">Dirección</label>
                        <input type="text" class="form-control" id="Dirección" placeholder="Direccion" required>
                    </div>
                    
                </div>
                <hr>
                <h5>Datos de reserva</h5>
                <div class="form-row">
                    <?php use Carbon\Carbon; ?>
                    <div class="form-group col-md-6">
                        <label for="f_ingreso">Fecha de ingreso</label>
                        <input type="date" name="f_ingreso" id="f_ingreso" class="form-control" step="1" min="{{Carbon::now()->format('Y-m-d')}}" required onchange="cambia_f_salida();">
                        <div class="input-group-addon">
                        
                        
                        </div>
                    </div>
                    <script>
                        function cambia_f_salida(){
                            var value = document.getElementById("f_ingreso").value;
                            var date = new Date(value);
                            date.setDate(date.getDate()+2);

                            var dateS = date.getFullYear()+"-"+(((date.getMonth()+1) < 10)?"0"+(date.getMonth()+1):date.getMonth()+1) +"-"+((date.getDate() < 10)?"0"+date.getDate():date.getDate());

                            document.getElementById("f_salida").setAttribute("min",dateS);
                            document.getElementById("f_salida").value = dateS;
                            check_disponible()

                        }

                    </script>
                    <div class="form-group col-md-6">
                        <label for="f_salida">Fecha de salida</label>
                        <input type="date" class="form-control" id="f_salida" step="1" min="{{Carbon::tomorrow()->format('Y-m-d')}}" required onchange="check_disponible();">
                    </div>
                    
                    <script>
                        let familiar, suite, junior, comp;
                        function check_disponible(){
                            let f_entrada = document.getElementById("f_ingreso").value;
                            let f_salida = document.getElementById("f_salida").value;

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/familiar/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                familiar = res;
                                }
                            });
                            
                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/junior/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                junior = res;
                                }
                            });

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/suite/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                suite = res;
                                }
                            });

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/comp/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                comp = res;
                                }
                            });



                        }

                    </script>



                </div>

                </form>    
            </div>
        </div>
</div>


@endsection
