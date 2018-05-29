
@extends('layouts/template')


@section('contenido')

    @include('layouts.elements.about')
    
	@include('layouts.elements.servicios')

	@include('layouts.elements.comentarios')

	@include('layouts.elements.mapa')

	
	<!--  End Email Subscription Section  -->

    @include('layouts.elements.contacto')



@endsection