@extends('layouts.site')

@section('content')
    <section class="w-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="align-items-center bg-logo col-lg-4 d-flex flex-column justify-content-center text-center text-lg-left">
                    <p class="font-weight-light h1 m-0 hyper-header text-uppercase text-white">
                        Um pouco <br> da nossa <span class="text-gold font-weight-black d-block">História</span>
                    </p> 
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="about-carousel">
                        @foreach ($banners as $banner)
                            @if ($banner->active)
                                <div class="item">
                                    <img src="{{ asset($banner->path) }}" class="w-100 h-100" alt="">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <section class="container">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 order-last order-md-first about-content">
                <span class="text-underline w-100 mb-5 mt-3 d-block d-md-none"></span>
                <span class="text-dark text-justify font-weight-normal">
                    {!! $about->body !!}                
                </span>
            </div>
            <div class="col-lg-5 col-md-6 offset-lg-1">
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Visão
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            {{ $about->visao }}
                        </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Missão
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            {{ $about->missao }}
                        </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Valores
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            {{ $about->valores }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid mt-5 d-block d-lg-none">
        <div class="row">
            <div class="col px-0">
                <div class="banner-carousel">
                    <div class="item">
                        <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection