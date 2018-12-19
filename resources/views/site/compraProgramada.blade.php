@extends('layouts.site')

@section('content')

<section class="w-100 position-relative bg-gradient-compra">
    <div class="d-block d-md-none container">
        <div class="row">
            <div class="col-12 p-5 text-center">
                <h1 class="font-weight-black">
                    <span style="color: #5a070c">A gente faz <br> tudo por voce.</span> <br> <span style="color: #c1273c">Inclusive as compras!</span>
                </h1>
                <p class="text-white font-weight-black">
                    Conheça a <span style="color:#5d0b0c">Compra Programada</span>
                    <br>
                    Um novo serviço inspirado em você.
                </p>
            </div>
        </div>
    </div>
    
    <div class="d-none d-md-block container position-absolute">
        <div class="row p-5">
            <div class="col-12 p-5">
                <h1 class="font-weight-black">
                    <span style="color: #5a070c">A gente faz <br> tudo por voce.</span> <br> <span style="color: #c1273c">Inclusive as compras!</span>
                </h1>
                <p class="text-white font-weight-black">
                    Conheça a <span style="color:#5d0b0c">Compra Programada</span>
                    <br>
                    Um novo serviço inspirado em você.
                </p>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <img src="{{ asset('img/compra_programada.png') }}" alt="Compra Programada" class="img-fluid mx-auto d-block">
        <section class="w-100 bg-wine">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6">
                        <p class="font-weight-normal text-white">
                            Envie sua lista com os
                            produtos de sua preferência para a <span style="color: #fedd84">Anyelle</span>, nossa <span style="color: #fedd84">Personal Shopper</span>, e receba tudo no conforto da sua casa.
                        </p>
                        <p class="font-weight-normal text-white">
                            Ela estará à sua disposição
                            para ajudar em tudo o que você precisar: opções de pratos, cálculo das quantidades para festas, churrascos e também para indicar ou apresentar novos produtos.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="h3 text-white text-center font-weight-black">
                            <span style="color: #fedd84">WhatsApp</span><br>
                            (69) 99210-0853
                        </p>
                        <p class="h5 text-white text-center font-weight-normal">
                            Atendimento: <br>
                            Seg a sáb, das 9h às 18h. <br>
                            Taxa de serviço: R$ 10,00.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

    

@endsection
