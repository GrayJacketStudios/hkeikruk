<div class="container">
        <div class="card text-center">
        <div class="card-header">
            <h2>@lang('contacto.contactanos')</h2>
            @if (session('status') != '')
            <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
            @endif
        </div>
        <div class="card-body">
        <div class="row">
    
            <div class="contact-address col-sm-5 my-auto">
                    <address><p><span>Hostal</span>Keikruk</p>
                    <strong>Chiloé 1218<br/>
                    Punta Arenas, Chile<br/>
                    @lang('contacto.telefono'): +56 (61) 224 5574<br/>
                    @lang('contacto.celular'): +56 (9) 7149 2771<br/>
                    @lang('contacto.correo'): contacto@hostalkeikruk.cl<br/>
                    </strong>
                    </address>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/hostalKeikruk/" ><i class="fa fa-facebook"  style="font-size:24px;"></i></a>
                        <a href="https://www.tripadvisor.cl/Hotel_Review-g297401-d13144111-Reviews-Hostal_Keikruk-Punta_Arenas_Magallanes_Region.html" target="_blank"><i class="fa fa-tripadvisor" style="font-size:24px;"></i></a>
                        <a href="https://www.instagram.com/hostalkeikruk1/"><i class="fa fa-instagram"  style="font-size:24px;"></i></a>
                    </div>
            </div>
            <div class="col-sm-7">
                <h4>@lang('contacto.mensaje')</h4>
                {!! Form::open(['route' => 'contact.store']) !!}
    
                <div class="form-group">
                    <label for="name">@lang("contacto.nombre")</label>
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true']) !!}
                </div>
                
                <div class="form-group">
                        <label for="email">@lang("contacto.correo")</label>
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'true']) !!}
                </div>
                
                <div class="form-group">
                        <label for="msg">@lang("contacto.consulta")</label>
                        <br>
                    {!! Form::textarea('msg', null, ['class' => 'form-control', 'rows' => '3', 'required' => 'true']) !!}
                </div>
                
                {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                
                {!! Form::close() !!}
            </div>
            </div class="row">
    
        </div>
    </div>