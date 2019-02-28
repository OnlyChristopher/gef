@extends('layouts.app')
@section('title', 'Actividades | Proyectos |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-actividades','active')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active"><a href="javascript:;">Actividades</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Listado de Actividades</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a class="btn btn-green btn-xs" href="/actividades/create">Crear nueva
                    actividad</a>
            </div>
            <h4 class="panel-title">Actividades</h4>
        </div>
        <div class="panel-body">
            <div class="container">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show" data-auto-dismiss="2000">
                        <span class="close" data-dismiss="alert">×</span>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                <div class="table-responsive">
                    @if(count($actividades))
                        <table class="table table-hover m-b-10">
                            <tr>
                                <th><b>No.</b></th>
                                <th>Proyecto</th>
                                <th>Nombre</th>
                                <th>Codigo Proyecto</th>
                                <th>Requesicion</th>
                                <th>OSC</th>
                                <th>Bases</th>
                                <th>Comprador</th>
                                <th width="90px">Acciones</th>
                            </tr>
                           
                            @foreach ($actividades as $actividad)
                                <tr>
                                    <td><b>{{$actividad->id_actividades}}.</b></td>
                                    <td><b>{{$actividad->nombre_proyecto}}</b></td>
                                    <td>{{$actividad->nombre_actividades}}</td>
                                    <td>{{$actividad->cod_proyecto}}</td>
                                    <td>{{$actividad->requisicion}}</td>
                                    <td>{{$actividad->osc}}</td>
                                    <td>{{$actividad->bases}}</td>
                                    <td>{{$actividad->comprador}}</td>
                                    {{-- <td>
                                        @if ($actividad->estado_proyecto == 0)
                                            Vigente
                                        @else
                                            Caducado    
                                        @endif
                                    </td>
                                    <td>{{$actividad->notificacion}}</td>
                                    <td>{{$actividad->comentarios}}</td>
                                     --}}
                                  
                                   
                                    {{-- <td>
                                        @if($actividad->cronograma)
                                            <a href="{{route('downloadfileProyectos', $actividad->id_proyecto)}}"
                                               title=""
                                               class="btn btn-danger btn-icon btn-circle" data-toggle="tooltip"
                                               data-container="body" data-title="{{$actividad->cronograma}}">
                                                <i class="fa fa-file-pdf"></i>
                                            </a>
                                        @endif
                                    </td> --}}
                                    <td>
                                        <form action="{{ route('actividades.destroy', $actividad->id_proyecto) }}"
                                              method="post">
                                            <a class="btn btn-icon btn-circle btn-warning"
                                               href="{{route('actividades.edit',$actividad->id_proyecto)}}"
                                               data-toggle="tooltip" data-container="body" data-title="Editar"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" data-click="swal-danger-actividades"
                                               class="btn btn-icon btn-circle btn-danger" data-toggle="tooltip"
                                               data-container="body" data-title="Eliminar"><i
                                                        class="fa fa-trash-alt"></i></a>
                                            <button id="btn-actividades-delete" style="display: none" type="submit"
                                                    class="btn btn-sm btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $actividades->links('pagination::bootstrap-4') !!}
                    @else
                        <div class="alert alert-info fade show" data-auto-dismiss="2000">
                            <span class="close" data-dismiss="alert">×</span>
                            <strong>No hay registros</strong>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end panel -->

@endsection