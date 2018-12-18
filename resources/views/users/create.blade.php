<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="content">
            @if (count($errors) > 0 )
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }} </li>
               @endforeach
              </ul>
            @endif

          {!! Form::open(['route' => 'users.store']) !!}


              <div class="form-group">
                  {!! Form::label('firstName', 'Förnamn') !!}
                  {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('lastName', 'Efternamn') !!}
                  {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('streetAdress', 'Gatuadress') !!}
                  {!! Form::text('streetAdress', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('zipcode', 'Postnummer') !!}
                  {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('city', 'Ort') !!}
                  {!! Form::text('city', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('pin', 'Personnummer') !!}
                  {!! Form::text('pin', null, ['class' => 'form-control']) !!}
              </div>

              {!! Form::submit('Registrera person', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
