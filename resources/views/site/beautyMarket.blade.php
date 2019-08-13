@extends('layouts.site')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
    <style>

        .beauty-img{
            height: auto;
            max-width: 100%;
        }

        @media screen and (max-width: 767px){
            .beauty-img{
                height: 880px;
                max-width: fit-content;
            }
            #beauty-container{
                overflow: hidden;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px){
            .beauty-img{
                height: 1000px;
                max-width: fit-content;
            }
            #beauty-container{
                overflow: hidden;
            }
        }

    </style>
@endsection

@section('content')

<section class="w-100 position-relative">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('img/beauty-market 2.png') }}" class="position-absolute img-fluid d-block mx-auto w-75 left-0 right-0">
            </div>
        </div>
    </div>
    <img src="{{ asset('img/mulher.png') }}" alt="" class="img-fluid mx-auto d-block">
</section>

<section id="beauty-container" class="w-100 position-relative">
    <div class="container position-absolute left-0 right-0 mx-auto">
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="h1 font-beauty text-pink">Completo mix de produtos das melhores e mais desejadas marcas</h3>
                <p class="text-white text-justify font-weight-normal mt-4">
                    Um espaço pensado exclusivamente para a sua beleza. E com uma enorme variedade de produtos das melhores marcas nacionais e importadas. Assim é o Beauty Market.
                    Se você gosta de maquiagens, perfumes, esmaltes e de lançamentos das mais reconhecidas linhas de cosméticos, aqui é o seu lugar. O Beauty Market está localizado dentro da  Loja 01 Luzitana, na Av. Dois de Junho, 2.251.
                    O completo mix de produtos vai te surpreender.
                    E você ainda conta com a praticidade de encontrar tudo isso bem aqui no seu supermercado.
                </p>
                <p class="text-white text-justify font-weight-normal mt-4">
                    Beauty Market.
                    Nosso espaço. Sua beleza.
                </p>
                <p class="text-white text-justify font-weight-normal mt-4">
                    Se tem tudo pra você, tem Luzitana.                
                </p>
            </div>
            <div class="col-md-6 position-relative d-none d-md-block">
                <img src="{{ asset('img/perfume.png') }}" class="img-fluid d-block mx-auto left-0 right-0 position-absolute" style="bottom: 10%">
            </div>
        </div>
    </div>
    <img src="{{ asset('img/maquiagem.png') }}" alt="" class="mx-auto d-block beauty-img">
</section>
@endsection

{{-- @section('js')
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script>
        $('.parallax-window').parallax({
            naturalWidth: 600,
            naturalHeight: 400
        });
    </script>
@endsection --}}