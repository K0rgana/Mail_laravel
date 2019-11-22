<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body>
<!--         <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
 -->
<form method="POST" action="{{route('demonio') }}">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Assunto</label>
    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Corpo</label>
    <textarea class="form-control" name="corpo" id="corpo" rows="3"></textarea>
  </div>
   <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
    </body>
</html>
