@extends('adminlte::page')

@section('title', 'Página Inicial')

@section('content_header')
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oops!</strong>
            @foreach ($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sucesso!</strong>
            {{ session('success') }}
        </div>
    @endif
    <h1>Sobre a empresa</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#conteudo" data-toggle="tab" aria-expanded="true">Conteúdo</a>
                    </li>
                    <li>
                        <a href="#carosel" data-toggle="tab" aria-expanded="false">Carrossel</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="conteudo">
                        <form action="{{ route('dashboard.about.update') }}" method="POST">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="h4" for="missao">Missão</label>
                                            <textarea name="missao" id="missao" rows="8" class="form-control">{{ $about->missao }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="h4" for="visao">Visão</label>
                                            <textarea name="visao" id="visao" rows="8" class="form-control">{{ $about->visao }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="h4" for="valores">Valores</label>
                                            <textarea name="valores" id="valores" rows="8" class="form-control">{{ $about->valores }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="body">Texto</label>
                                            <textarea name="body" id="body" class="form-control">
                                                    {!! $about->body !!}
                                                </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
            
                    </div>
                    <div class="tab-pane" id="carosel">
                        <div class="tab-pane">
                            <a href="#" data-toggle="modal" data-target="#addBanner" class="btn btn-primary" style="margin: 15px 0">
                                Adicionar Banner
                            </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th></th>
                                        <th>
                                            Banner
                                        </th>
                                        <th>
                                            Titulo
                                        </th>
                                        <th>
                                            Ativo
                                        </th>
                                    </thead>
                                    <tbody id="banners">
                                        @foreach ($banners as $banner)
                                            <tr data-id="{{ $banner->id }}">
                                                <td style="width: 5%; vertical-align: middle"><i class="fa fa-bars my-handle" aria-hidden="true"></i></td>
                                                <td style="width: 25%">
                                                    <a href="{{ asset($banner->path) }}" data-lightbox="banners" style="min-width: 100%;">
                                                        <img src="{{ asset($banner->path) }}" style="height: 15%;" alt=""> 
                                                    </a>
                                                </td>
                                                <td style="vertical-align: middle">
                                                    <span style="margin-left: 0 auto; display: inline-block">{{ $banner->title }}</span>
                                                </td>
                                                <td style="width: 5%; vertical-align: middle">
                                                    <label class="switch" style="margin-left: auto; display: inline-block;">
                                                        <input id="switch" data-id="{{ $banner->id }}" type="checkbox" {{ $banner->active ? 'checked' : ''}}>
                                                        <span class="slider round"></span>
                                                    </label>
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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="h4 box-title">SEO</h3>
                </div>          
                <div class="box-body">
                    <div class="form-group">
                        <label class="h4" for="valores">Keywords</label>
                        <input name="description" id="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="h4" for="valores">Titulo</label>
                        <input name="description" id="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="h4" for="valores">Description</label>
                        <textarea name="description" rows="5" id="description" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    <!-- Modal -->
    <div class="modal fade" id="addBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Adicionar Banner</h4>
                </div>
                <form action="{{ route('dashboard.about.banner') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="#title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="#banner">Banner</label>
                            <input type="file" class="form-control" name="banner" id="banner">
                            <p class="help-block">Tamanho sugerido: 860x400</p>
                        </div>
                        <div class="checkbox">
                            <label for="#active">
                                <input type="checkbox" name="active" id="active" checked> Ativo
                            </label>
                        </div>
                        {{-- <div class="checkbox">
                            <label>
                            <input type="checkbox"> Check me out
                            </label>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <style>
        .my-handle:hover{
            cursor: pointer;
        }
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 55px;
            height: 25px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 3px;
            background-color: white;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        input:checked + .slider {
            background-color: #2196f3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196f3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

    </style>
@endsection

@section('js')
    <script>
        var base_url = "{{ env('APP_URL') }}";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        $(document).ready(function() {
            var el = $('#banners')[0];
            console.log(el);
            var sort = Sortable.create(el, {
                group: "name",  // or { name: "...", pull: [true, false, clone], put: [true, false, array] }
                sort: true,  // sorting inside list
                delay: 0, // time in milliseconds to define when the sorting should start
                touchStartThreshold: 0, // px, how many pixels the point should move before cancelling a delayed drag event
                disabled: false, // Disables the sortable if set to true.
                store: null,  // @see Store
                animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation
                handle: ".my-handle",  // Drag handle selector within list items
                filter: ".ignore-elements",  // Selectors that do not lead to dragging (String or Function)
                preventOnFilter: true, // Call `event.preventDefault()` when triggered `filter`

                // Called by any change to the list (add / update / remove)
                onSort: function (/**Event*/evt) {
                    var itemEl = evt.item;  // dragged HTMLElement
                    evt.to;    // target list
                    evt.from;  // previous list
                    evt.oldIndex;  // element's old index within old parent
                    evt.newIndex;  // element's new index within new parent
                    var li = $('#banners tr');
                    var newOrder = [];

                    $.each(li, function(index, value){
                        return  newOrder.push($(value).data('id'));
                    });
                    
                    
                    $.post(base_url + '/api/about-banners/order', {'order[]': newOrder}, function(status, response){
                        console.log(response);
                    });
                }
            });
            $('#body').summernote({
                height: 150
            });

            $('.switch').on('click', 'input[type="checkbox"]' ,function(){
                var toggler = $(this);
                var id = toggler.data('id');
                var checked = toggler.prop("checked");
            
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post(base_url + '/api/about-banners/toggle/' + id, function(data, status){
                    checked ? toastr.success("Perfil ativado") : toastr.error("Perfil desativado")
                });
            });
        });
    </script>
@endsection