@extends('layouts.site')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
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

<section class="w-100 position-relative">
    <div class="container position-absolute left-0 right-0 mx-auto">
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="h1 font-beauty text-pink">Completo mix de produtos das melhores e mais desejadas marcas</h3>
                <p class="text-white text-justify font-weight-normal mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nam quod maxime quibusdam exercitationem soluta, vero sequi vel quas laborum provident perspiciatis saepe, alias modi accusantium distinctio, nemo dolore voluptatibus mollitia totam unde corrupti? Obcaecati enim magnam odit earum ullam eveniet, rem labore recusandae, quos quis ducimus debitis mollitia temporibus!
                </p>
            </div>
            <div class="col-md-6 position-relative d-none d-md-block">
                <img src="{{ asset('img/perfume.png') }}" class="img-fluid d-block mx-auto left-0 right-0 position-absolute" style="bottom: 10%">
            </div>
        </div>
    </div>
    <img src="{{ asset('img/maquiagem.png') }}" alt="" class="img-fluid mx-auto d-block">
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