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


                    <div id="listaHabitaciones">
                        
                    </div>                    
                    <script>
                        let familiar, suite, junior, comp, num;
                        const divListHab = document.getElementById("listaHabitaciones");
                        function check_disponible(){
                            familiar = suite = junior = comp = -1;
                            num = 0;
                            divListHab.innerHTML = "<center>Buscando habitaciones disponibles<br><progress max='0' value='0'></progress></center>";
                            let f_entrada = document.getElementById("f_ingreso").value;
                            let f_salida = document.getElementById("f_salida").value;

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/familiar/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                familiar = res;
                                console.log("familiar: "+res);
                                check_complete();
                                }
                            });
                            
                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/junior/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                junior = res;
                                console.log("Junior: "+res);
                                check_complete();
                                }
                            });

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/suite/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                suite = res;
                                console.log("Suite: "+res);
                                check_complete();
                                }
                            });

                            $.ajax({
                                type: "GET",
                                url: `/checkOcupado/comp/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                comp = res;
                                console.log("Comp: "+res);
                                check_complete();
                                }
                            });



                            
                        }

                        function check_complete(){
                            num++;
                            divListHab.innerHTML = "<center>Buscando habitaciones disponibles<br><progress max='"+4+"' value='"+num+"'></progress></center>";
                            if(num >= 4){
                                show_Habitaciones();
                            }
                            return;
                        }


                        function add_room(hab, disp){
                            let card = 
                            `<div class="col-sm-4">
                                <div class="card" style="width: 100%;">`;
                            switch(hab){
                                case "familiar":
                                    card += 
                                    `<img src="{{URL::asset('img/habitaciones/hab_1.jpg')}}" class="card-img-top" alt="Habitación familiar | Habitación Cuadruple">
                                    <div class="card-body">
                                        <h5 class="card-title">@lang('habitaciones.hab_1Titulo')</h5>
                                        <p class="card-text">@lang('habitaciones.hab_1Text')</p>
                                        
                                    `;
                                    break;
                                case "junior":
                                    card += 
                                    `<img src="{{URL::asset('img/habitaciones/hab_2.jpg')}}" class="card-img-top" alt="Habitación en suite">
                                    <div class="card-body">
                                        <h5 class="card-title">@lang('habitaciones.hab_3Titulo')</h5>
                                        <p class="card-text">@lang('habitaciones.hab_3Text')</p>
                                        
                                    `;
                                    break;
                                case "suite":
                                    card += 
                                    `<img src="{{URL::asset('img/habitaciones/hab_3.jpg')}}" class="card-img-top" alt="Habitación junior">
                                    <div class="card-body">
                                        <h5 class="card-title">@lang('habitaciones.hab_2Titulo')</h5>
                                        <p class="card-text">@lang('habitaciones.hab_2Text')</p>
                                        
                                    `;
                                    break;
                                case "comp":
                                    card += 
                                    `<img src="{{URL::asset('img/habitaciones/hab_4.jpg')}}" class="card-img-top" alt="Habitación con baño compartido">
                                    <div class="card-body">
                                        <h5 class="card-title">@lang('habitaciones.hab_4Titulo')</h5>
                                        <p class="card-text">@lang('habitaciones.hab_4Text')</p>
                                        
                                    `;
                                    break;
                            }


                            card += `
                                        <input type="number" value="1" min="1" max="${disp}" class="form-control">
                                        <a href="#" class="btn btn-primary">@lang('reservar.reservarBtn')</a>
                                    </div>
                                </div>
                            </div>`
                            return card;
                        }


                        function show_Habitaciones(){
                            let card = "";
                            if(familiar == 0 && suite == 0 && junior == 0 && comp == 0){
                                divListHab.innerHTML = "<h4>Para las fechas seleccionadas no hay habitaciones disponibles</h4>";
                                return;
                            }
                            if(familiar >= 1){card += add_room("familiar", familiar);}
                            if(suite >= 1){card += add_room("suite", suite);}
                            if(junior >= 1){card += add_room("junior", junior);}
                            if(comp >= 1){card += add_room("comp", comp);}
                            divListHab.innerHTML = 
                            `<div class='container'>
                                <div class='row'>
                                    ${card}
                                </div>
                            </div>
                                `;

                                $.ajax({
                                type: "GET",
                                url: `/checkOcupado/suite/${f_entrada}/${f_salida}`,
                                success: function(res) {
                                suite = res;
                                console.log("Suite: "+res);
                                check_complete();
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
