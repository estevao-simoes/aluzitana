@extends('adminlte::page')

@section('title', 'Página Inicial')

@section('content_header')
    @component('dashboard.components.validation')
    @endcomponent
    <h1>Tabloides</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Novo</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('dashboard.tabloide.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="start">Início</label>
                        <input type="date" name="start_date" id="start" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="start">Fim</label>
                        <input type="date" name="end_date" id="start" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
            </div>
            <hr>
            <div class="form-group">
                <label for="tabloide">Imagens</label>
                <input type="file" name="tabloide[]" id="tabloide" multiple>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
      
@stop