
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="left:40px; position: relative;" href="{{ URL::to('/')}}"><img src="{{ URL::asset('img/logo2.png') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="left:40px; position: relative;">
      @if(Request::segment(1) == '')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('/')}}"> @lang('header.inicio')</a>
      </li>
      @if(Request::segment(1) == 'habitaciones')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('habitaciones')}}">@lang('header.habitaciones')</a>
      </li>
      @if(Request::segment(1) == 'tarifas')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('tarifas')}}">@lang('header.tarifas')</a>
      </li>
      @if(Request::segment(1) == 'interes')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('interes')}}">@lang('header.interes')</a>
      </li>
      @if(Request::segment(1) == 'opiniones')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('opiniones')}}">@lang('header.opiniones')</a>
      </li>
      @if(Request::segment(1) == 'galeria')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('galeria')}}">@lang('header.galeria')</a>
      </li>
      @if(Request::segment(1) == 'contacto')
        <li class="nav-item active">
      @else
        <li class="nav-item">
      @endif
        <a class="nav-link" href="{{ URL::to('contacto')}}">@lang('header.contacto')</a>
      </li>

    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item" ><a class="nav-link" href="https://www.facebook.com/hostalKeikruk/" target="_blank"><i class="fa fa-facebook-official" style="font-size:24px;"></i></a></li>
					<li class="nav-item" ><a class="nav-link" href="https://www.tripadvisor.cl/Hotel_Review-g297401-d13144111-Reviews-Hostal_Keikruk-Punta_Arenas_Magallanes_Region.html" target="_blank"><i class="fa fa-tripadvisor" style="font-size:24px;"></i></a></li>
					<li class="nav-item" ><a class="nav-link" href="https://www.instagram.com/hostalkeikruk1/" target="_blank"><i class="fa fa-instagram" style="font-size:24px;"></i></a></li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn btn-secondary text-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{URL::asset('img/banderas/'.App::getLocale().'.png')}}"> @lang('header.idioma')
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ URL::to('lang/en')}}"><img src="{{URL::asset('img/banderas/en.png')}}"> English</a>
          <a class="dropdown-item" href="{{ URL::to('lang/es')}}"><img src="{{URL::asset('img/banderas/es.png')}}"> Español</a>
          <a class="dropdown-item" href="{{ URL::to('lang/de')}}"><img src="{{URL::asset('img/banderas/de.png')}}"> Deutsch</a>
          <a class="dropdown-item" href="{{ URL::to('lang/fr')}}"><img src="{{URL::asset('img/banderas/fr.png')}}"> Français</a>
          <a class="dropdown-item" href="{{ URL::to('lang/nl')}}"><img src="{{URL::asset('img/banderas/nl.png')}}"> Dutch</a>
        </div>
      </li>
    </ul>
  </div>
</nav>