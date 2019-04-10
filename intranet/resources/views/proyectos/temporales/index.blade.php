@extends('layouts.app')
@section('title', 'Temporales | Proyectos |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-temporales','active')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active"><a href="{{route('temporales.index')}}">Listado Temporales</a></li>
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
            <div class="table-responsive">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show" data-auto-dismiss="2000">
                        <span class="close" data-dismiss="alert">×</span>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                    @if(count($temporales))
                        <table class="table table-hover m-b-10">
                            <thead>
                            <tr>
                                <th><b>No.</b></th>
                                <th nowrap>Usuario Carga</th>
                                <th nowrap>Proyecto</th>
                                <th nowrap>Tipo Documento</th>
                                <th nowrap>Nombre Archivo</th>
                                <th nowrap>Comentarios</th>
                                <th nowrap>Fecha Carga</th>
                                <th nowrap>Usuario Revisión</th>
                                <th nowrap>Fecha Devolución</th>
                                <th nowrap>Estado</th>
                                <th nowrap>Documento</th>
                                <th width="125px">Acciones</th>
                            </tr>
                            </thead>

                            @foreach ($temporales as $temporal)
                                <tr>
                                    <td><b>{{$temporal->id_temporal}}.</b></td>
                                    <td nowrap><b>{{$temporal->firstname}} {{$temporal->lastname}}</b></td>
                                    <td nowrap>{{$temporal->nombre_proyecto}}</td>
                                    <td nowrap>{{$temporal->tipo_doc}}</td>
                                    <td nowrap>{{$temporal->nombre_archivo}}</td>
                                    <td>{{$temporal->comentarios}}</td>
                                    <td>{{$temporal->fecha_carga}}</td>
                                    <td>{{$temporal->nombre}} {{$temporal->apellido}}</td>
                                    <td>{{$temporal->fecha_devolucion}}</td>
                                    <td>{{$temporal->estado}}</td>

                                    <td>
                                        @if($temporal->documento)
                                            <a href="{{ route('downloadfileTemporales', $temporal->id_temporal)}}"
                                               title=""
                                               class="btn btn-success btn-icon btn-circle" data-toggle="tooltip" data-container="body" data-title="{{$temporal->documento}}">
                                                <i class="fa fa-file-excel"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td nowrap>
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
    <!-- end panel -->

@endsection