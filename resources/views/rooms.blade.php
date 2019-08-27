@extends('layouts/template')


@section('contenido')

    <div class="row">
        <div class="col-sm-8">
            <div class="container">
        
            <div class="text-center">
                <h1 class="titulos">@lang('habitaciones.habitaciones')</h1>
                <hr class="brace"/>
            </div>
            <div>
            <p>@lang('habitaciones.habitacionesText')</p>
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
                            <h4>@lang('habitaciones.hab_1Titulo')</h4>
                            @lang('habitaciones.hab_1Text')
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
                            <h4>@lang('habitaciones.hab_2Titulo')</h4>
                            @lang('habitaciones.hab_2Text')
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
                            <h4>@lang('habitaciones.hab_3Titulo')</h4>
                            @lang('habitaciones.hab_3Text')
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
                            <h4>@lang('habitaciones.hab_4Titulo')</h4>
                            @lang('habitaciones.hab_4Text')
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>

        <div class="col-sm-3">
                <div class="container">
                        <h1 class="titulos">@lang('habitaciones.tarifasTitulo')</h1>
                        <hr class="brace"/>
                        <p>@lang('habitaciones.tarifasText')</p>
                    
                    <br>
                        <h3>@lang('habitaciones.tempBajaTitulo')</h3><span><strong>@lang('habitaciones.tempBajaDesc')</strong></span>
                        <table style="text-align: center;" class="table table-hover ">
                            <tr class="table-active">
                                <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_1Titulo')</td>
                                <td >$63.000</td>
                                <td>$100</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_2Titulo')</td>
                                <td >$55.000</td>
                                <td>$87</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_3Titulo')</td>
                                <td >$42.500</td>
                                <td>$67</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_4Titulo')</td>
                                <td >$35.000</td>
                                <td>$55</td>
                            </tr>
                    
                        </table>
                    
                    
                        <h3>@lang('habitaciones.tempAltaTitulo')</h3><span><strong>@lang('habitaciones.tempAltaDesc')</strong></span>
                        <table style="text-align: center;" class="table table-hover ">
                            <tr class="table-active">
                                <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_1Titulo')</td>
                                <td >$75.000</td>
                                <td>$120</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_2Titulo')</td>
                                <td >$65.000</td>
                                <td>$103</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_3Titulo')</td>
                                <td >$50.000</td>
                                <td>$80</td>
                            </tr>
                            <tr >
                                <th scope="row" style="text-align: left;">@lang('habitaciones.hab_4Titulo')</td>
                                <td >$38.000</td>
                                <td>$60</td>
                            </tr>
                    
                        </table>
                    
                        <br>
                        <strong>@lang('habitaciones.iva')</strong>
                    
                    </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
    </script>

@endsection