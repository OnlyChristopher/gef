@extends('layouts.app')
@section('title', 'Proyectos | Carpetas |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-proyectos','active')
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active"><a href="javascript:;">Carpetas</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Carpetas</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a class="btn btn-green btn-xs" href="/proyectos/carpetas/create/{{$proyectos->id_proyecto}}">Crear sub carpetas</a>
            </div>
            <h4 class="panel-title">{{$proyectos->nombre_proyecto}}</h4>
        </div>
        <div class="panel-body">
            <div class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show" data-auto-dismiss="2000">
                        <span class="close" data-dismiss="alert">×</span>
                        <strong>{{$message}}</strong>
                    </div>
                @endif

                            <div id="jstree-default">
                                <ul>
                                    <li data-jstree='{"opened":true}' >
                                        01.Ingenieria
                                        <ul>
                                            <li data-jstree='{"opened":true, "selected":true }' >
                                                Prueba 1
                                                <ul>
                                                    <li data-jstree='{ "icon" : "fa fa-file fa-lg text-primary" }'><a href="#">3555A</a></li>
                                                    <li data-jstree='{ "icon" : "fa fa-file fa-lg text-primary" }'><a href="#">3555B</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>02.Licitacion</li>
                                    <li>03.Ejecucion</li>
                                    <li>04.Cierre</li>
                                </ul>
                            </div>
                        </div>

        </div>
    </div>
    <!-- end panel -->

@endsection
