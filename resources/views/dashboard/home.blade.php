@extends('adminlte::page')

@section('title', 'Página Inicial')

@section('content_header')
    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ env('APP_NAME') }}</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title=""
                data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title=""
                data-original-title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        Bem vindo, {{ auth()->user()->name }}
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <p class="text-muted small">
            Painle administrativo do site.
        </p>
    </div>
    <!-- /.box-footer-->
</div>
      
@stop