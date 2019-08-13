@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    @component('dashboard.components.validation')
    @endcomponent
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
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regularProducts as $produto)
                                        <tr>
                                            <td>
                                                <a href="{{ asset('storage/' . $produto->image) }}" data-lightbox="produtos-regulares" data-title="{{ $produto->title }}" style="min-width: 100%;">
                                                    <img src="{{ asset('storage/' . $produto->image) }}" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td style="vertical-align: middle; width: 70%">{{ $produto->title }}</td>
                                            <td style="vertical-align: middle;">{{ $produto->valor }}</td>
                                            <td style="vertical-align: middle;">{{ $produto->promocional }}</td>
                                            <td style="vertical-align: middle;">
                                                <a href="#" data-toggle="modal" data-produto="{{ json_encode($produto) }}" data-target="#produto-modal" title="Editar">
                                                    <i data-toggle="tooltip" title="Editar" class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </td>
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
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exclusiveProducts as $produto)
                                        <tr>
                                            <td>
                                                <a href="{{ asset('storage/' . $produto->image) }}" data-lightbox="produtos-exclusivos" data-title="{{ $produto->title }}" style="min-width: 100%;">
                                                    <img src="{{ asset('storage/' . $produto->image) }}" class="img-responsive" alt="">
                                                </a>
                                            </td>
                                            <td style="vertical-align: middle; width: 70%">{{ $produto->title }}</td>
                                            <td style="vertical-align: middle;">{{ $produto->valor }}</td>
                                            <td style="vertical-align: middle;">{{ $produto->promocional }}</td>
                                            <td style="vertical-align: middle;">
                                                <a href="#" data-toggle="modal" data-produto="{{ json_encode($produto) }}" data-target="#produto-modal" title="Editar">
                                                    <i data-toggle="tooltip" title="Editar" class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </td>
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

    <!-- Modal -->
    <div class="modal fade" id="produto-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="font-weight-bold modal-title">
                        Produto
                    </h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="editForm" method="POST" class="form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('patch') }}
                                
                                <div class="form-group">
                                    <label for="name">Titulo</label>
                                    <input id="name" type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <img id="picture" src="#" alt="" class="img-responsive center-block">
                                </div>
                                <div class="form-group">
                                    <label for="picture">Escolher imagem</label>
                                    <input type="file" class="form-control-file" name="picture">
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="#valor">Valor</label>
                                            <input type="text" class="form-control money" name="valor" id="valor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="#promocional">Promocional</label>
                                            <input type="text" class="form-control money" name="promocional" id="promocional">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Atualizar
                                    </button>
                                </div>
            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script>
        
        var base_url = '{{ env("APP_URL") }}';

        $('[data-toggle="tooltip"]').tooltip();
        // $('.money').mask("###", {reverse: true});

        $('#produto-modal').on('show.bs.modal', function (event) {
            
            var button = $(event.relatedTarget) 
            var produto = button.data('produto')
            var modal = $(this)
            var image = $('#picture');
            var title = $('#name');
            var valor = $('#valor');
            var promocional = $('#promocional');

            $('#editForm').attr('action', base_url + '/dashboard/produto/' + produto.id)

            image.prop('src', produto.image);
            title.val(produto.title);
            valor.val(produto.valor);
            promocional.val(produto.promocional);

        });

    </script>
@endsection