@extends('layouts/template')


@section('contenido')


<!-- Images used to open the lightbox -->
<div class="row">
    <div class="column">
      <img src="{{URL::asset('img/habitaciones/hab_1.jpg')}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    
  </div>
  
  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
  
      <div class="mySlides">
        <div class="numbertext">1 / 2</div>

      </div>
  
      <div class="mySlides">
        <div class="numbertext">2 / 4</div>
        <img src="img2_wide.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">3 / 4</div>
        <img src="img3_wide.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">4 / 4</div>
        <img src="img4_wide.jpg" style="width:100%">
      </div>
  
      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
      <!-- Caption text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>
  
      <!-- Thumbnail image controls -->
      <div class="column">
        <img class="demo" src="{{URL::asset('img/habitaciones/hab_1.jpg')}}" onclick="currentSlide(1)" alt="Nature">
      </div>
  
      <div class="column">
        <img class="demo" src="{{URL::asset('img/habitaciones/hab_2.jpg')}}" onclick="currentSlide(2)" alt="shit">
      </div>
  
     
    </div>
  </div>
      
@endsection