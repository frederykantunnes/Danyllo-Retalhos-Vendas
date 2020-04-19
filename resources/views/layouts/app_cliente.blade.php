<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vendas - Danyllo Retalhos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: lightcoral">
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm fixed-top">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{asset('brasao.png')}}" height="45px">
                </a>





{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

            <a href="{{route('carrinho')}}" class="navbar-toggler pt-2 pb-2">
                <div align="center">
                    <i style="font-size: 15px;" class="fa fa-shopping-cart"></i>
                    <p class="p-0 pt-1 m-0" style="font-size: 10px">Carrinho</p>
                </div>
            </a>

        </nav>
        <main class="py-4" style="padding: 10px; margin-top: 52px">
            <div class="container">
                @include('flash::message')
            </div>
            <div align="center" class="container" style="padding: 0">
                <div class="card shadow p-2 mb-0 bg-white rounded col-12" style="padding: 10px; margin: 0" align="left">
                    <form action="{{route('buscar')}}" method="GET">
                        <div class="row">
                            <div class="dropdown show col-md-2 mb-1">
                                <a class="btn btn-primary dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>
                                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                                    @foreach(\App\CategoriaModel::all() as $categoria)
                                        <a class="dropdown-item" href="{{route('listarporcategoria', $categoria->id)}}">{{$categoria->nome}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-8 col-8">
                                <input type="search" name="produto" class="form-control" placeholder="Buscar produtos...">
                            </div>
                            <div class="col-md-2 col-4">
                                <button type="submit" class="btn btn-dark w-100"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 m-0 p-0" align="center">

                    </div>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
<div class="col-12" align="center">
    <p>Dúvidas?&nbsp;&nbsp;&nbsp;<a href="https://api.whatsapp.com/send?phone=5583999351875&text=Olá! Estou com uma dúvida!" class="btn btn-danger">Clique aqui</a></p>
    <p style="margin: 0; padding: 0"><strong>Endereço: </strong>Rua Cel. Marcolino Pereira Lima</p>
    <p style="margin: 0; padding: 0"><strong></strong>Centro, Princesa Isabel-PB</p>
    <p style="margin: 0; padding: 0"><strong>Contatos: </strong>(83) 3457-2119 / (83)99935-1875</p>
    <p style="color: grey">2020 © atdsistemas.com.br</p>
</div>



</body>
</html>
