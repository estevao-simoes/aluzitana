@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#regular" data-toggle="tab" aria-expanded="true">Produtos</a>
                    </li>
                    <li>
                        <a href="#exclusive" data-toggle="tab" aria-expanded="false">Linha exclusiva</a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="regular">
                        
                        <div class="table-responsive">
                            <table class="table-striped table table-dark">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">Imagem</th>
                                        <th>Titulo</th>
                                        <th>Valor</th>
                                        <th>Promocional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regularProducts as $produto)
                                        <tr>
                                            <td>
                                                <a href="{{ $produto->image }}" data-lightbox="produtos-regulares" data-title="{{ $produto->title }}" style="min-width: 100%;">
                                                    <img src="{{ $produto->image }}" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>{{ $produto->title }}</td>
                                            <td>{{ $produto->valor }}</td>
                                            <td>{{ $produto->promocional }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>  

                    </div>

                    <div class="tab-pane" id="exclusive">
                        
                        <div class="table-responsive">
                            <table class="table-striped table table-dark">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">Imagem</th>
                                        <th>Titulo</th>
                                        <th>Valor</th>
                                        <th>Promocional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exclusiveProducts as $produto)
                                        <tr>
                                            <td>
                                                <a href="{{ $produto->image }}" data-lightbox="produtos-exclusivos" data-title="{{ $produto->title }}" style="min-width: 100%;">
                                                    <img src="{{ $produto->image }}" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td>{{ $produto->title }}</td>
                                            <td>{{ $produto->valor }}</td>
                                            <td>{{ $produto->promocional }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                        

                    </div>
            
                </div>
            </div>
        </div>
    </div>            
@stop

@section('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection