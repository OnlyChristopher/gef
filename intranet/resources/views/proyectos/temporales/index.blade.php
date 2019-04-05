@extends('layouts.app')
@section('title', 'Temporales | Proyectos |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-temporales','active')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active"><a href="javascript:;">Temporales</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Listado de Temporales</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a class="btn btn-green btn-xs" href="{{route('temporales.create')}}">Crear nueva temporal</a>
            </div>
            <h4 class="panel-title">Temporales</h4>
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
                    @if(count($temporales))
                        <table class="table table-hover m-b-10">
                            <tr>
                                <th><b>No.</b></th>
                                <th>Cliente</th>
                                <th>Proyecto</th>
                                <th>Nombre Archivo</th>
                                <th>Comentarios</th>
                                <th>Fecha Carga</th>
                                <th>Documento</th>
                                <th width="125px">Acciones</th>
                            </tr>

                            @foreach ($temporales as $temporal)
                                <tr>
                                    <td><b>{{$temporal->id_temporal}}.</b></td>
                                    <td><b>{{$temporal->nombre_cliente}}</b></td>
                                    <td>{{$temporal->proyecto}}</td>
                                    <td>{{$temporal->nombre_archivo}}</td>
                                    <td>{{$temporal->comentarios}}</td>
                                    <td>{{$temporal->fecha_carga}}</td>
                                    <td>
                                        @if($temporal->documento)
                                            <a href="{{ route('downloadfileTemporales', $temporal->id_temporal)}}"
                                               title=""
                                               class="btn btn-success btn-icon btn-circle" data-toggle="tooltip" data-container="body" data-title="{{$temporal->documento}}">
                                                <i class="fa fa-file-excel"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('temporales.destroy', $temporal->id_temporal) }}"
                                              method="post">
                                            <a class="btn btn-icon btn-circle btn-purple"
                                               href="{{route('notifiacionesTemporalCreate',$temporal->id_temporal)}}"
                                               data-toggle="tooltip" data-container="body" data-title="Notificacion"><i
                                                        class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-circle btn-warning"
                                               href="{{route('temporales.edit',$temporal->id_temporal)}}"
                                               data-toggle="tooltip" data-container="body" data-title="Editar"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" data-click="swal-danger-temporales" data-id="{{$temporal->id_temporal}}"
                                               class="btn btn-icon btn-circle btn-danger" data-toggle="tooltip"
                                               data-container="body" data-title="Eliminar"><i
                                                        class="fa fa-trash-alt"></i></a>
                                            <button id="btn-temporales-delete-{{$temporal->id_temporal}}" style="display: none" type="submit"
                                                    class="btn btn-sm btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $temporales->links('pagination::bootstrap-4') !!}
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