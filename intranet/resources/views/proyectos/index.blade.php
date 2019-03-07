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
    <h1 class="page-header">Listado de Proyectos</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a class="btn btn-green btn-xs" href="/proyectos/create">Crear nuevo
                    proyecto</a>
            </div>
            <h4 class="panel-title">Proyectos</h4>
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
                    @if(count($proyectos))
                        <table class="table table-hover m-b-10">
                            <tr>
                                <th><b>No.</b></th>
                                <th>Nombre</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Estado</th>
                                <th>Comentarios</th>
                                <th>Cronograma</th>
                                <th width="130px">Acciones</th>
                            </tr>
                           
                            @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td><b>{{$proyecto->id_proyecto}}.</b></td>
                                    <td>{{$proyecto->nombre_proyecto}}</td>
                                    <td>{{$proyecto->finicio_proyectada}}</td>
                                    <td>{{$proyecto->ffin_proyectada}}</td>
                                    <td>
                                        @if ($proyecto->estado_proyecto == 0)
                                            Vigente
                                        @else
                                            Caducado    
                                        @endif
                                    </td>
                                    <td>{{$proyecto->comentarios}}</td>
                                   
                                    <td>
                                        @if($proyecto->cronograma)
                                            <a href="{{route('downloadfileProyectos', $proyecto->id_proyecto)}}"
                                               title=""
                                               class="btn btn-danger btn-icon btn-circle" data-toggle="tooltip"
                                               data-container="body" data-title="{{$proyecto->cronograma}}">
                                                <i class="fa fa-file-pdf"></i>
                                            </a>
                                        @endif
                                    <td>
                                        <form action="{{ route('proyectos.destroy', $proyecto->id_proyecto) }}"
                                              method="post">
                                            <a class="btn btn-icon btn-circle btn-info"
                                               href="{{route('proyectos.show',$proyecto->id_proyecto)}}"
                                               data-toggle="tooltip" data-container="body" data-title="Detalle"><i
                                                        class="fab fa-envira"></i></a>
                                            <a class="btn btn-icon btn-circle btn-warning"
                                               href="{{route('proyectos.edit',$proyecto->id_proyecto)}}"
                                               data-toggle="tooltip" data-container="body" data-title="Editar"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" data-click="swal-danger-proyectos"
                                               class="btn btn-icon btn-circle btn-danger" data-toggle="tooltip"
                                               data-container="body" data-title="Eliminar"><i
                                                        class="fa fa-trash-alt"></i></a>
                                            <button id="btn-proyectos-delete" style="display: none" type="submit"
                                                    class="btn btn-sm btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $proyectos->links('pagination::bootstrap-4') !!}
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