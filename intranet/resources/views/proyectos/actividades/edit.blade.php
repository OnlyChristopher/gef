@extends('layouts.app')
@section('title', 'Actividades | Proyectos |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-actividades','active')
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{route('actividades.index')}}">Listado de Actividades</a></li>
        <li class="breadcrumb-item active">Actividades</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Actividades </h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Crear Actividades</h4>
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
                    <form action="{{route('actividades.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate="true" autocomplete="off" >
                        @csrf
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="cliente">Proyecto</label>
                            <div class="col-md-6">
                                <select  name="id_proyecto" id="id_proyecto" class="form-control selectpicker" data-live-search="true" data-style="btn-white" data-parsley-required="true" data-parsley-required-message="Por favor Seleccione Area">
                                    @foreach ($proyectos as $proyecto)
                                        <option value="{{$proyecto->id_proyecto}}" >{{$proyecto->nombre_proyecto}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Nombre Actividad</label>
                            <div class="col-md-6">
                                <input type="text" name="nombre_actividades" id="nombre_actividades" placeholder="Ingresa Actividad" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Actividad">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Codigo Proyecto</label>
                            <div class="col-md-6">
                                <input type="text" name="cod_proyecto" id="cod_proyecto" placeholder="Ingresa Proyecto" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Codigo Proyecto">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Requisicion</label>
                            <div class="col-md-6">
                                <input type="text" name="requisicion" id="requisicion" placeholder="Ingresa Requisicion" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Requisicion">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">OSC</label>
                            <div class="col-md-6">
                                <input type="text" name="osc" id="osc" placeholder="Ingresa OSC" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa OSC">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Bases</label>
                            <div class="col-md-6">
                                <input type="text" name="bases" id="bases" placeholder="Ingresa Bases" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Bases">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Comprador</label>
                            <div class="col-md-6">
                                <input type="text" name="comprador" id="comprador" placeholder="Ingresa Comprador" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Comprador">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Costo Presupuestado</label>
                            <div class="col-md-6">
                                <input type="text" name="costo_presupuestado" id="costo_presupuestado" placeholder="Ingresa Presupuestado" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Costo">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="cliente">Estados</label>
                            <div class="col-md-6">
                                <select  name="id_estado" id="id_estado" class="form-control selectpicker" data-live-search="true" data-style="btn-white" data-parsley-required="true" data-parsley-required-message="Por favor Seleccione Area">
                                    @foreach ($estados as $estado)
                                        <option value="{{$estado->id_estado}}" >{{$estado->estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Adjudicado</label>
                            <div class="col-md-6">
                                <input type="text" name="adjudicado" id="adjudicado" placeholder="Ingresa Adjudicado" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Adjudicado">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Timepo Ejecucion</label>
                            <div class="col-md-6">
                                <input type="text" name="tiempo_ejecucion" id="tiempo_ejecucion" placeholder="Ingresa Ejecucion" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Ejecucion">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">FR043</label>
                            <div class="col-md-6">
                                <input type="text" name="fr043" id="fr043" placeholder="Ingresa FR043" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa FR043">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Movilizado</label>
                            <div class="col-md-6">
                                <input type="text" name="movilizado" id="movilizado" placeholder="Ingresa Movilizado" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Movilizado">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Operador</label>
                            <div class="col-md-6">
                                <input type="text" name="operador" id="operador" placeholder="Ingresa Operadpr" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Operadpr">
                            </div>
                        </div>
                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="codigo">Visita Terreno</label>
                            <div class="col-md-6">
                                <input type="text" name="visita_terreno" id="visita_terreno" placeholder="Ingresa Terreno" class="form-control" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Terreno">
                            </div>
                        </div>


                        <div class="form-group row m-b-10">
                            <label class="col-md-3 text-md-right col-form-label" for="version">Comentarios</label>
                            <div class="col-md-6">
                                <textarea name="comentarios" id="comentarios" placeholder="Comentarios" class="form-control" rows="3" data-parsley-required="true" data-parsley-required-message="Por favor Ingresa Comentario" ></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}">



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