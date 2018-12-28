@extends('adminlte::page')

@section('title', 'Banners')

@section('content_header')
    @component('dashboard.components.validation')
    @endcomponent
    <h1>Contatos</h1>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listagem</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Enviado</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contatos as $contato)
                                <tr>
                                    <td>{{ $contato->created_at->diffForHumans() }}</td>
                                    <td>{{ $contato->nome }}</td>
                                    <td>
                                        {{ $contato->email }}
                                        <a href="#" class="clipboard btn" data-toggle="tooltip" title="Copiar" data-clipboard-text="{{ $contato->email }}">
                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>{{ $contato->telefone }}</td>
                                    <td class="text-center">
                                        <a href="#" data-contato="{{ json_encode($contato) }}" data-toggle="modal" data-target="#showContato">
                                            <i class="fa fa-eye text-black" data-toggle="tooltip" title="Visualizar" aria-hidden="true"></i>
                                        </a>
                                        <a href="mailto:{{ $contato->email }}?subject=Obrigado%20pelo%20contato%2C%20{{ $contato->nome }}" target="_top" style="margin: 0 10px">
                                            <i class="fa fa-reply text-primary" data-toggle="tooltip" title="Responder" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" onClick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir o contato?')){document.getElementById('delete-contato-{{ $contato->id }}').submit()}" data-toggle="tooltip" title="Apagar">
                                            <i class="fa fa-times text-danger fa-fw" aria-hidden="true"></i>
                                        </a>
                                        <form id="delete-contato-{{ $contato->id }}" action="{{ route('dashboard.contato.destroy', $contato->id) }}" class="hidden" method="POST">
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
    </div>
</div>

<div class="modal fade" id="showContato" tabindex="-1" role="dialog" aria-labelledby="showContato" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <b>E-mail:</b> <span id="email"></span>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <b>Telefone:</b> <span id="telefone"></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <b>Mensagem:</b>
                        <code id="mensagem" style="width: 100%; display: block; padding: 15px; margin-top: 10px">
                        </code>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p id="created_at" class="help-text small"></p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script>
        $(document).ready(function(){
            new ClipboardJS('.clipboard');
            
            $('.table').DataTable();
            $('[data-toggle="tooltip"]').tooltip(); 

            $('#showContato').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget);
                var contato = button.data('contato');
                var modal = $(this);
                var timestamp = $('#created_at');
                var email = $('#email');
                var telefone = $('#telefone');
                var mensagem = $('#mensagem');
                var title = $('.modal-title');

                timestamp.html('<i class="fa fa-clock-o" aria-hidden="true"></i> ' + contato.created_at)
                title.html('Contato de <b>' + contato.nome + '</b>')
                email.html(contato.email)
                telefone.html(contato.telefone)
                mensagem.html(contato.mensagem)

            });

        })
    </script>
@endsection