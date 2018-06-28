@extends('layouts/template')


@section('contenido')

<section class="gallery-block grid-gallery">
    <div class="container">
        <div class="heading">
            <h2>@lang("galeria.titulo")</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/sala_estar_1.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/sala_estar_1.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/sala_comun.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/sala_comun.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/fachada.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/fachada.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/hab_1_2.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/hab_1_2.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/hab_3_2.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/hab_3_2.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/hab_5.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/hab_5.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/hab_7.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/hab_7.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/patio.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/patio.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/sala_comun_ocupada.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/sala_comun_ocupada.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/desayunador.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/desayunador.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/banio.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/banio.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/gallery/banio_h3.jpg')}}">
                    <img class="img-fluid image scale-on-hover galeria" src="{{URL::asset('img/gallery/banio_h3.jpg')}}">
                </a>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
</script>
@endsection