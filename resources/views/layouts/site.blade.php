<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Supermercado A Luzitana</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/css/inputmask.min.css" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body id="home" data-spy="scroll" data-target="#navbar" data-offset="110">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark-gray fixed-top">
        <div class="container py-3">
            <a class="navbar-brand" href="{{ Request::is('/') ? '#home' : route('site.home') }}">
                <img src="{{ asset('img/Objeto-Inteligente-de-Vetor.png') }}" width="220px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
                <ul class="navbar-nav" class="ml-auto">
                    <li class="nav-item">
                        <a class="text-white font-weight-black font-family-dosis text-uppercase nav-link"
                            href="{{ Request::is('/') ? '#home' : route('site.home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white font-weight-black font-family-dosis text-uppercase nav-link"
                            href="{{ Request::is('/') ? '#ofertas' : route('site.home') . '#ofertas' }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white font-weight-black font-family-dosis text-uppercase nav-link"
                            href="{{ Request::is('/') ? '#novidades' : route('site.home') . '#novidades' }}">Novidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white font-weight-black font-family-dosis text-uppercase nav-link"
                            href="{{ Request::is('/') ? '#lojas' : route('site.home') . '#lojas' }}">Lojas</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white font-weight-black font-family-dosis text-uppercase nav-link"
                            href="{{ route('site.about') }}">A empresa</a>
                    </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item text-center">
                        <a href="{{ route('site.beautyMarket') }}" class="mx-auto">
                            <img src="{{ asset('img/Vector-Smart-Object.png') }}" width="100px" class="img-fluid">
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item text-center">
                        <a href="#" class="text-white">
                            <i class="fa fa-facebook fa-fw" style="opacity: .7" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-white">
                            <i class="fa fa-instagram fa-fw" style="opacity: .7" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-white">
                            <i class="fa fa-youtube-play fa-fw" style="opacity: .7" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <div class="d-block w-100 bg-gray">
        <div class="container">
            <div class="row pt-3">
                <div class="col">
                    <p class="h2 mt-3 mb-0 text-uppercase text-white font-weight-black">
                        Contato
                    </p>
                    <p class="text-uppercase font-weight-normal text-white">
                        Dúvidas, reclamações ou sugestões: mande-nos um email.
                    </p>
                </div>
            </div>
            <form class="row pb-5 pt-4 " action="{{ route('site.contato') }}" method="post">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-white small" for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-white small" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-white small" for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-stretch justify-content-between">
                    <div class="form-group">
                        <label class="text-white small" for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button data-loading-text="Enviando <i class='fa fa-circle-o-notch fa-spin'></i>"
                            class="btn btn-danger mx-auto text-uppercase d-block px-4 font-weight-bold">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="w-100 d-block bg-dark-gray"> -->
    <div id="lojas" class="container-fluid bg-dark-gray">
        <div class="row px-4 pt-5">
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/logo_2.png') }}" class="img-fluid mx-auto mb-5 w-50 d-block">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white line-height-short">
                            <small>
                                <b>Loja 1</b><br>
                                Av. Dois de Junho, 2251 <br>
                                Centro <br>
                                Fone: (69) 3344-3000
                            </small>
                        </p>
                        <p class="text-white line-height-short">
                            <small>
                                Horário de atendimento: <br>
                                2ª à Sábado, das 7h às 21h <br>
                                Domingos e Feriados, das 7h às 19h
                            </small>
                        </p>
                    </div>

                    <div class="col-6">
                        <p class="text-white line-height-short">
                            <small>
                                <b>Loja 02</b><br>
                                Av. Sete de Setembro, 3536 <br>
                                Jardim Clodoado <br>
                                Fone: (69) 3441-7692
                            </small>
                        </p>
                        <p class="text-white line-height-short">
                            <small>
                                Horário de atendimento: <br>
                                2ª à Sábado, das 7h às 20h <br>
                                Domingos e Feriados, das 7h às 13h
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex flex-column justify-content-between">
                <div class="row">
                    <div class="col-12">
                        <p class="text-uppercase font-weight-bold text-white h5">
                            Formas de pagamento
                        </p>
                        <p class="text-white small font-weight-bold mb-0">
                            Cartões de crédito
                        </p>
                        <img src="{{ asset('img/cartoes.png') }}" class="img-fluid mb-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-white small font-weight-bold mb-0">
                            Cartões de débito
                        </p>
                        <img src="{{ asset('img/credito.png') }}" class="img-fluid mb-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-white small font-weight-bold mb-0">
                            Cartões de alimentação
                        </p>
                        <img src="{{ asset('img/alimentacao.png') }}" class="img-fluid mb-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-white font-weight-bold text-uppercase small">Nas compras acima de R$50,00 e no
                            limite
                            máximo acumulado de R$1000,00 para clientes
                            com cadastro Aprovado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column justify-content-between bg-light-gray p-3">
                    <p class="text-gold font-weight-bold small">
                        Cadastro de cheques somente em horário comercial, de Segunda a Sexta-Feira das 8h às 18h e
                        Sábado das 8h às 12h.
                    </p>
                    <p class="text-white font-weight-bold text-uppercase small">
                        Documentos necessários:
                    </p>
                    <p class="text-white small">
                        Comprovante de endereço <br>
                        RG e CPF<br>
                        Telefone para contato<br>
                        Talão de cheques<br>
                        Comprovante de renda<br>
                    </p>
                    <p class="text-white small font-weight-bold">
                        Prazo mínimo para aprovação de 30 dias. <br>
                        Pagamento com cheque pré-datado para 30 dias.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <footer class="footer bg-gray d-flex">
        <div class="container font-weight-normal d-flex justify-content-center">
            <span class="text-muted small m-0 align-self-center text-center">© 2018 | Supermercados A Luzitana</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00) 00000-0000', {placeholder: "(__) _____-____"});
            $('#email').mask("A", {
                translation: {
                    "A": { pattern: /[\w@\-.+]/, recursive: true }
                },
                placeholder: "exemplo@exemplo.com"
            });
        });
    </script>

    @yield('js')

    @if ($errors->any())
    @foreach ($errors as $error)
    @endforeach
    @endif
    @if(session('success'))
    <script>
        toastr.success("{{ session('success') }}", {
                "progressBar": true
            })
    </script>
    @endif

</body>

</html>