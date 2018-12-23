@extends('adminlte::page')

@section('title', 'Tabloide #' . $tabloide->id)

@section('content_header')
    @component('dashboard.components.validation')
    @endcomponent
    <h1>Tabloide #{{ $tabloide->id }}</h1>
@endsection

@section('content')
<div class="box">
    <div class="box-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="start">Início</label>
                    <input type="date" name="start_date" id="start" value="{{ $tabloide->start_date->format('Y-m-d') }}" class="form-control" disabled>
                </div>
                <div class="col-md-6">
                    <label for="end">Fim</label>
                    <input type="date" name="end_date" id="end" value="{{ $tabloide->end_date->format('Y-m-d') }}" class="form-control" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
        </div>
        <hr>
        <div class="row">   
            @foreach ($tabloide->images as $image)
                <div class="col-md-3 col-sm-2">
                    <img src="{{ asset($image->path) }}" class="img-responsive center-block">
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
@endsection