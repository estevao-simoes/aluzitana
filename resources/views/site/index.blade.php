@extends('layouts.site')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="banner-carousel">
                    <div>
                        <picture>
                            <source media="(max-width: 650px)" srcset="{{ asset('img/banner_mobile.png') }}">
                            <!-- <source media="(min-width: 465px)" srcset="img_white_flower.jpg"> -->
                            <img src="{{ asset('img/banner-black-label.png') }}" alt="Banner Black Label" class="img-fluid">
                        </picture>
                    </div>
                    <div>
                        <picture>
                            <source media="(max-width: 650px)" srcset="{{ asset('img/banner_mobile.png') }}">
                            <!-- <source media="(min-width: 465px)" srcset="img_white_flower.jpg"> -->
                            <img src="{{ asset('img/banner-black-label.png') }}" alt="Banner Black Label" class="img-fluid">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ofertas" class="container-fluid bg-purple" style="margin-top: -6px;">
        <div class="row">
            <div class="col">
                <p class="text-uppercase font-family-dosis h4 font-weight-black m-0 py-3 text-orange text-center">
                    Ofertas da semana em destaque
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-5">
                <a class="d-block mw-100">
                    <div class="row">
                        <div class="col">
                            <!-- 230 X 280  -->
                            <img src="{{ asset('img/vinho.png') }}" class="d-block mw-100 mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-dark text-center font-weight-bold my-2">
                                Canepa novíssimo Cabernet Sauvignon 2017
                            </p>
                        </div>
                    </div>
                    <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                        <div class="col-4" style="line-height: 15px;">
                            <div class="row">
                                <div class="col">
                                    <small class="m-0">De</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="font-weight-black">R$ 30,40</span>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                            <p class="text-gold text-center m-0 p-1">
                                <span class="small">
                                    Por 
                                </span>
                                <span class="font-weight-black">
                                    R$ 24,99
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5">
                <a class="d-block mw-100">
                    <div class="row">
                        <div class="col">
                            <!-- 230 X 280  -->
                            <img src="{{ asset('img/vinho2.png') }}" class="d-block mw-100 mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-dark text-center font-weight-bold my-2">
                                Canepa novíssimo Cabernet Sauvignon 2017
                            </p>
                        </div>
                    </div>
                    <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                        <div class="col-4" style="line-height: 15px;">
                            <div class="row">
                                <div class="col">
                                    <small class="m-0">De</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="font-weight-black">R$ 30,40</span>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                            <p class="text-gold text-center m-0 p-1">
                                <span class="small">
                                    Por
                                </span>
                                <span class="font-weight-black">
                                    R$ 24,99
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5">
                <a class="d-block mw-100">
                    <div class="row">
                        <div class="col">
                            <!-- 230 X 280  -->
                            <img src="{{ asset('img/vinho.png') }}" class="d-block mw-100 mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-dark text-center font-weight-bold my-2">
                                Canepa novíssimo Cabernet Sauvignon 2017
                            </p>
                        </div>
                    </div>
                    <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                        <div class="col-4" style="line-height: 15px;">
                            <div class="row">
                                <div class="col">
                                    <small class="m-0">De</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="font-weight-black">R$ 30,40</span>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                            <p class="text-gold text-center m-0 p-1">
                                <span class="small">
                                    Por 
                                </span>
                                <span class="font-weight-black">
                                    R$ 24,99
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5">
                <a class="d-block mw-100">
                    <div class="row">
                        <div class="col">
                            <!-- 230 X 280  -->
                            <img src="{{ asset('img/vinho2.png') }}" class="d-block mw-100 mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-dark text-center font-weight-bold my-2">
                                Canepa novíssimo Cabernet Sauvignon 2017
                            </p>
                        </div>
                    </div>
                    <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                        <div class="col-4" style="line-height: 15px;">
                            <div class="row">
                                <div class="col">
                                    <small class="m-0">De</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="font-weight-black">R$ 30,40</span>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                            <p class="text-gold text-center m-0 p-1">
                                <span class="small">
                                    Por
                                </span>
                                <span class="font-weight-black">
                                    R$ 24,99
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <picture>
            <source media="(max-width: 650px)" srcset="{{ asset('img/banner_secundario_mobile.png') }}">
            <!-- <source media="(min-width: 465px)" srcset="img_white_flower.jpg"> -->
            <img src="{{ asset('img/banner_secundario.jpg') }}" alt="Banner Black Label" class="w-100 h-100 d-block mx-auto">
        </picture>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <a href="#">
                <picture>
                    <source media="(max-width: 650px)" srcset="{{ asset('img/banner2_mobile.png') }}">
                    <!-- <source media="(min-width: 465px)" srcset="img_white_flower.jpg"> -->
                    <img src="{{ asset('img/beauty-market.png') }}" alt="Banner Black Label" class="w-100 h-100 d-block mx-auto">
                </picture>
            </a>
        </div>
    </div>

    <div id="adega" class="container">
        <div class="row mt-5">
            <div class="col-md-6 mb-3">
                <img src="{{ asset('img/compra-programada.png') }}" class="w-100" alt="">
            </div>
            <div class="col-md-6 mb-3">
                <img src="{{ asset('img/clube-vantagens.png') }}" class="w-100" alt="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 mb-3">
                <img src="{{ asset('img/cartao-luzi.png') }}" class="w-100" alt="">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col mb-3">
                        <img src="{{ asset('img/servicos.png') }}" class="w-100" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <img src="{{ asset('img/trabalhe.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col-6 mb-3">
                        <img src="{{ asset('img/adega.png') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="novidades" class="d-block w-100 bg-gold">
        <div class="container">
            <div class="row mt-5 py-2">
                <div class="col text-center">
                    <div class="d-flex justify-content-center align-items-center flex-md-row flex-column">
                        <p class="h3 font-family-dosis text-uppercase font-weight-bold text-purple m-0">
                            Linha
                        </p>
                        <img src="{{ asset('img/exclusiva.jpg') }}" class="mx-2">
                        <p class="h3 font-family-dosis text-uppercase font-weight-bold text-purple m-0">
                            Luzitana
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 d-block bg-light-gold">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-6 col-lg-3 mb-5">
                    <a class="d-block mw-100">
                        <div class="row">
                            <div class="col">
                                <!-- 230 X 280  -->
                                <img src="{{ asset('img/produto_exclusivo_1.png') }}" class="d-block mw-100 mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-dark text-center font-weight-bold my-2">
                                    Canepa novíssimo Cabernet Sauvignon 2017
                                </p>
                            </div>
                        </div>
                        <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                            <div class="col-4" style="line-height: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <small class="m-0">De</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="font-weight-black">R$ 30,40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                                <p class="text-gold text-center m-0 p-1">
                                    <span class="small">
                                        Por
                                    </span>
                                    <span class="font-weight-black">
                                        R$ 24,99
                                    </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5">
                    <a class="d-block mw-100">
                        <div class="row">
                            <div class="col">
                                <!-- 230 X 280  -->
                                <img src="{{ asset('img/produto_exclusivo_2.png') }}" class="d-block mw-100 mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-dark text-center font-weight-bold my-2">
                                    Canepa novíssimo Cabernet Sauvignon 2017
                                </p>
                            </div>
                        </div>
                        <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                            <div class="col-4" style="line-height: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <small class="m-0">De</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="font-weight-black">R$ 30,40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                                <p class="text-gold text-center m-0 p-1">
                                    <span class="small">
                                        Por
                                    </span>
                                    <span class="font-weight-black">
                                        R$ 24,99
                                    </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5">
                    <a class="d-block mw-100">
                        <div class="row">
                            <div class="col">
                                <!-- 230 X 280  -->
                                <img src="{{ asset('img/produto_exclusivo_1.png') }}" class="d-block mw-100 mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-dark text-center font-weight-bold my-2">
                                    Canepa novíssimo Cabernet Sauvignon 2017
                                </p>
                            </div>
                        </div>
                        <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                            <div class="col-4" style="line-height: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <small class="m-0">De</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="font-weight-black">R$ 30,40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                                <p class="text-gold text-center m-0 p-1">
                                    <span class="small">
                                        Por
                                    </span>
                                    <span class="font-weight-black">
                                        R$ 24,99
                                    </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5">
                    <a class="d-block mw-100">
                        <div class="row">
                            <div class="col">
                                <!-- 230 X 280  -->
                                <img src="{{ asset('img/produto_exclusivo_2.png') }}" class="d-block mw-100 mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-dark text-center font-weight-bold my-2">
                                    Canepa novíssimo Cabernet Sauvignon 2017
                                </p>
                            </div>
                        </div>
                        <div class="row no-gutters bg-lighter-gray p-2 font-weight-bold">
                            <div class="col-4" style="line-height: 15px;">
                                <div class="row">
                                    <div class="col">
                                        <small class="m-0">De</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="font-weight-black">R$ 30,40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center bg-purple col-8 d-flex justify-content-center rounded">
                                <p class="text-gold text-center m-0 p-1">
                                    <span class="small">
                                        Por
                                    </span>
                                    <span class="font-weight-black">
                                        R$ 24,99
                                    </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>            
            </div>
        </div>
    </div>
@endsection