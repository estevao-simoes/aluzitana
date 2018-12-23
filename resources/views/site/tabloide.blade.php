@extends('layouts.site')

@section('content')

<section class="w-100 bg-gray">
    <div class="container">
        <div class="row py-2">
            <div class="bg-logo py-4 col-12 text-center" style="background-position: center;">
                <p class="font-weight-light h1 m-0 hyper-header text-uppercase text-white text-center">
                    Nossas <span class="text-gold font-weight-black">ofertas</span>
                    <span class="text-gold font-weight-light d-block"><small style="font-size: 30%">Válidas até {{ $tabloide->end_date->format('d/m/Y') }}</small></span>
                </p> 
            </div>
        </div>    
    </div>
</section>

<section class="container">
    <div class="row py-3">
        @foreach ($tabloide->images as $image)
        <div class="col-md-6 py-3">
            <img src="{{ asset($image->path) }}" class="img-fluid center-block" alt="">
        </div>
        @endforeach
    </div>
</section>

@endsection