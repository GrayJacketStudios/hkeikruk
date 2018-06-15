@extends('layouts/template')


@section('contenido')

<section class="gallery-block grid-gallery">
    <div class="container">
        <div class="heading">
            <h2>Grid Gallery</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_1.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_2.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_3.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/habitaciones/hab_4.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/sala_estar_1.jpg')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/sala_estar_1.jpg')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/')}}">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a class="lightbox" href="{{URL::asset('img/')}}">
                    <img class="img-fluid image scale-on-hover" src="{{URL::asset('img/')}}">
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