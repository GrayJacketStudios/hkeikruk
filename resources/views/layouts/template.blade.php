

@include('layouts/header')
<body>

@include('layouts/elements/navbar')
@include('layouts/elements/banner')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@yield('contenido')



</body>
@include('layouts/footer')