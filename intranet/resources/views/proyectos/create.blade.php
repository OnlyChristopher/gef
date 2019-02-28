@extends('layouts.app')
@section('title', 'Proyectos |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-proyectos','active')
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active"><a href="javascript:;">Proyectos</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Proyectos </h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Crear Proyectos</h4>
        </div>
        <div class="panel-body">
            <div class="container">


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops! </strong> there where some problems with your input.<br>
                        <ul>
                            @foreach ($errors as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-8 offset-md-2">
                    <form action="{{route('proyectos.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate="true" autocomplete="off" >
                        @csrf
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="cod_proyecto">Codigo</label>
                            <div class="col-md-6">
                                <input type="text" name="cod_proyecto" id="cod_proyecto" placeholder="Ingresa Codigo" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Codigo">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="nombre_proyecto">Proyecto</label>
                            <div class="col-md-6">
                                <input type="text" name="nombre_proyecto" id="nombre_proyecto" placeholder="Nombre de Proyecto" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Nombre de proyecto" >
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="finicio_proyectada">Fecha Inicio P.</label>
                            <div class="col-md-6">
                                <input type="text" name="finicio_proyectada" id="finicio_proyectada" placeholder="Fecha Inicio Proyectada" class="form-control fecha" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Fecha Inicio">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="finicio_proyectada">Fecha Fin P.</label>
                            <div class="col-md-6">
                                <input type="text" name="ffin_proyectada" id="ffin_proyectada" placeholder="Fecha Fin Proyectada" class="form-control fecha" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Fecha Fin">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="notificacion">Notificacion</label>
                            <div class="col-md-6">
                                <input type="text" name="notificacion" id="notificacion" placeholder="Notificacion" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Nofiticacion" >
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="comentarios">Comentarios</label>
                            <div class="col-md-6">
                                <textarea name="comentarios" id="comentarios" placeholder="Comentarios" class="form-control" rows="3" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Comentario" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="cronograma">Cronograma</label>
                            <div class="col-md-6">
                                <input type="file" accept="*"  name="cronograma" id="cronograma" placeholder="Seleccione Cronograma" class="form-control" {{--data-parsley-required="true" data-parsley-required-message="Por favor Seleccione Archivo"--}}>
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="finicio_real">Fecha Inicio R.</label>
                            <div class="col-md-6">
                                <input type="text" name="finicio_real" id="finicio_real" placeholder="Fecha Inicio Real" class="form-control fecha" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Fecha Inicio Real">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="ffin_real">Fecha Fin R.</label>
                            <div class="col-md-6">
                                <input type="text" name="ffin_real" id="ffin_real" placeholder="Fecha Fin Real" class="form-control fecha" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Fecha Fin Real">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="ffin_real">Crear carpetas</label>
                            <div class="col-md-6">
                                <div class="checkbox checkbox-css">
                                    <input type="checkbox" id="cssCheckbox1" value="" />
                                    <label for="cssCheckbox1"></label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_users" id="id_users" value="{{ Auth::user()->id }}">

                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label"></label>

                            <div class="col-md-6">
                                <a href="javascript:window.history.back()" class="btn btn-sm btn-success">Regresar</a>
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection