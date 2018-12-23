@extends('adminlte::page')

@section('title', 'Página Inicial')

@section('content_header')
    <h1>Tabloides</h1>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listagem</h3>
        <a href="{{ route('dashboard.tabloide.create') }}" class="btn btn-flat btn-primary btn-sm" style="margin-left: 15px;">
            Tabloide <i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>
        </a>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table id="tabloide-list" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Status</th>
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tabloides as $tabloide)
                        <tr>
                            <td class="text-center">
                                @if ($tabloide->isActive())
                                    <i class="fa fa-check fa-fw text-success" data-toggle="tooltip" title="Ativo" aria-hidden="true"></i>    
                                @else
                                    <i class="fa fa-times fa-fw text-danger" data-toggle="tooltip" title="Inativo" aria-hidden="true"></i>
                                @endif  
                            </td>
                            <td>
                                <a class="center-block" href="{{ route('dashboard.tabloide.show', $tabloide->id) }}">
                                    {{ $tabloide->start_date->format('d/m/Y') }}
                                </a>
                            </td>
                            <td>
                                <a class="center-block" href="{{ route('dashboard.tabloide.show', $tabloide->id) }}">
                                    {{ $tabloide->end_date->format('d/m/Y') }}
                                </a>
                            </td>
                            <td>
                                @foreach ($tabloide->images as $image)
                                    @if ($loop->first)                                    
                                        <a href="{{ asset($image->path) }}"  data-toggle="tooltip" title="Preview" data-lightbox="galeria-tabloide-{{ $tabloide->id }}">
                                            <i class="fa fa-eye fa-fw" aria-hidden="true"></i>
                                        </a>
                                    @endif
                                    <a href="{{ asset($image->path) }}" data-lightbox="galeria-tabloide-{{ $tabloide->id }}"></a>
                                @endforeach
                                <a href="#" onClick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir o tabloide?')){document.getElementById('delete-tabloide-{{ $tabloide->id }}').submit()}" data-toggle="tooltip" title="Apagar">
                                    <i class="fa fa-times text-danger fa-fw" aria-hidden="true"></i>
                                </a>
                                <form id="delete-tabloide-{{ $tabloide->id }}" action="{{ route('dashboard.tabloide.destroy', $tabloide->id) }}" class="hidden" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>      
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
            $('#tabloide-list').DataTable();
        });
    </script>
@endsection