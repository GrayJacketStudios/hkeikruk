@extends('layouts/template')


@section('contenido')
    <br><br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-card" src="{{URL::asset('img/interes/Ovejero.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">@lang('interes.ovejeroTitulo')</h5>
                <p class="card-text">@lang('interes.ovejeroText')</p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-card" src="{{URL::asset('img/interes/PSaraBraun.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">@lang('interes.pSaraBraunTitulo')</h5>
                <p class="card-text">@lang('interes.pSaraBraunText')</p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-card" src="{{URL::asset('img/interes/mHernandoMagallanes.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">@lang('interes.mHernandoMagallanesTitulo')</h5>
                <p class="card-text">@lang('interes.mHernandoMagallanesText')</p>

                </div>
            </div>
        </div>

        <br>
        <div class="card-deck">
                <div class="card">
                    <img class="card-img-top img-card" src="{{URL::asset('img/interes/fuerteBulnes.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">@lang('interes.FuerteBTitulo')</h5>
                    <p class="card-text">@lang('interes.FuerteBText')</p>
    
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-card" src="{{URL::asset('img/interes/naoVictoria.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">@lang('interes.mNaoVictoriaTitulo')</h5>
                    <p class="card-text">@lang('interes.mNaoVictoriaText')</p>
    
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-card" src="{{URL::asset('img/interes/calle_roca.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">@lang('interes.calleRocaTitulo')</h5>
                    <p class="card-text">@lang('interes.calleRocaText')</p>
    
                    </div>
                </div>
            </div>


            <br>
            <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-card" src="{{URL::asset('img/interes/cementerio.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">@lang('interes.cementerioTitulo')</h5>
                        <p class="card-text">@lang('interes.cementerioText')</p>
        
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-card" src="{{URL::asset('img/interes/humedal.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">@lang('interes.humedalTitulo')</h5>
                        <p class="card-text">@lang('interes.humedalText')</p>
        
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-card" src="{{URL::asset('img/interes/pinguineras.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">@lang('interes.pinguinerasTitulo')</h5>
                        <p class="card-text">@lang('interes.pinguinerasText')</p>
        
                        </div>
                    </div>
                </div>


    </div>
@endsection