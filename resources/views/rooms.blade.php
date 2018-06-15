@extends('layouts/template')


@section('contenido')

    <div class="row">
        <div class="col-sm-8">
            <div class="container">
        
            <div class="text-center">
                <h1 class="titulos">Habitaciones</h1>
                <hr class="brace"/>
            </div>
            <div>
            <p>Tenemos distintos modelos de habitaciones para satisfacer tus necesidades en su estadía, cada una equipada con calefacción central, TV cable, WiFi, Elementos de baño, Tetera electrica, vasos y tazas. </p>
            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <section class="gallery-block grid-gallery" style="padding-bottom: 0px !important; padding-top: 0px !important;">
                                <a class="lightbox rounded mx-auto d-block img-thumbnail" href="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                                </a>
                            </section>
                            
                        </div>
                        <div class="col-sm-9">
                            <h4>Habitación en <strong>suite Familiar</strong></h4>
                            <p>Hermosa habitación con una fantastica vista a nuestro patio, ubicada en nuestro primer piso, con capacidad para 4 personas, ideal para aquellos viajes de familia o amigos.</p>
                            <p>Posee una cama King Size que puede ser separada y también una litera.</p>
                            <p>Esta habitación cuenta con:</p>
                            <ul>
                            <li>Recibidor privado</li>
                            <li>Televisión en recibidor y habitación</li>
                            <li>Baño privado</li>
                            <li>MiniBar</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3">
                                <section class="gallery-block grid-gallery" style="padding-bottom: 0px !important; padding-top: 0px !important;">
                                        <a class="lightbox rounded mx-auto d-block img-thumbnail" href="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                                            <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                                        </a>
                                    </section>
                        </div>
                        <div class="col-sm-9">
                            <h4>Habitación matrimonial o twin en <strong>Suite</strong></h4>
                            <p>Hermosa habitación  ubicada en nuestro primer piso, con capacidad para 2 personas o 3 si se agrega una cama adicional, ideal para viajes de familia, turismo o negocios.</p>
                            <p>Posee una cama King Size que puede ser separada segun la preferencia de los huespedes.</p>
                            <p>Esta habitación cuenta con:</p>
                            <ul>
                            <li>Televisión en habitación</li>
                            <li>Baño privado</li>
                            <li>MiniBar</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3">
                                <section class="gallery-block grid-gallery" style="padding-bottom: 0px !important; padding-top: 0px !important;">
                                        <a class="lightbox rounded mx-auto d-block img-thumbnail" href="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                                            <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                                        </a>
                                    </section>
                        </div>
                        <div class="col-sm-9">
                            <h4>Habitación matrimonial <strong>Junior</strong></h4>
                            <p>Hermosa habitación con una fantastica vista a nuestro patio, ubicada en nuestro primer piso, con capacidad para 2 personas, ideal para aquellos viajes de turismo o negocios.</p>
                            <p>Posee una cama de tamaño matrimonial.</p>
                            <p>Esta habitación cuenta con:</p>
                            <ul>
                            <li>Televisión en habitación</li>
                            <li>Baño privado</li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3">
                                <section class="gallery-block grid-gallery" style="padding-bottom: 0px !important; padding-top: 0px !important;">
                                        <a class="lightbox rounded mx-auto d-block img-thumbnail" href="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                                            <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                                            
                                        </a>
                                    </section>
                        </div>
                        <div class="col-sm-9">
                            <h4>Habitación matrimonial o twin <strong>Baño compartido</strong></h4>
                            <p>Hermosa habitación con una fantastica vista a nuestro patio o ciudad, ubicada en nuestro segundo piso, con capacidad para 2 personas, ideal para aquellos viajes de turismo o negocios.</p>
                            <p>Posee una cama de tamaño King, la cual puede ser separada segun preferencia de los huespedes.</p>
                            <p>Esta habitación cuenta con:</p>
                            <ul>
                            <li>Televisión en habitación</li>
                            <li>Baño compartido</li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>

        <div class="col-sm-3">
                <div class="container">
                        <h1 class="titulos">Tarifas 2018 a 2019 en Hostal Keikruk</h1>
                        <hr class="brace"/>
                        <p>Disponemos de las siguientes tarifas mediante reservación directa, si tiene cualquier duda o consulta, o requiere información sobre un convenio, contactese con nosotros.</p>
                    
                    <br>
                        <h3>Temporada Baja</h3><span><strong>* La temporada baja es a partir del 30 de Abril hasta el 30 de Septiembre</strong></span>
                        <table style="text-align: center;" class="table table-hover ">
                            <tr class="table-active">
                                <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion familiar en Suite</td>
                                <td >$63.000</td>
                                <td>$100</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin en Suite</td>
                                <td >$55.000</td>
                                <td>$87</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion matrimonial Junior</td>
                                <td >$42.500</td>
                                <td>$67</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin Baño compartido</td>
                                <td >$35.000</td>
                                <td>$55</td>
                            </tr>
                    
                        </table>
                    
                    
                        <h3>Temporada Alta</h3><span><strong>* La temporada Alta es a partir del 1 de Octubre hasta el 29 de Abril</strong></span>
                        <table style="text-align: center;" class="table table-hover ">
                            <tr class="table-active">
                                <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion familiar en Suite</td>
                                <td >$75.000</td>
                                <td>$120</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin en Suite</td>
                                <td >$65.000</td>
                                <td>$103</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion matrimonial Junior</td>
                                <td >$50.000</td>
                                <td>$80</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin Baño compartido</td>
                                <td >$38.000</td>
                                <td>$60</td>
                            </tr>
                    
                        </table>
                    
                        <br>
                        <strong>(*)Todos nuestros precios incluyen IVA</strong>
                    
                    </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
    </script>

@endsection