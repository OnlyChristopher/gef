@extends('layouts.app')
@section('title', 'Proyectos | Detalles |')
@section('clase-open-proyecto','expand')
@section('clase-active-proyecto','active')
@section('clase-active-proyectos','active')
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb hidden-print pull-right">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="javascript:window.history.back()">Listado de Proyectos</a></li>
        <li class="breadcrumb-item active">Detalle de Proyectos</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header hidden-print">Detalle de Proyectos </h1>
    <!-- end page-header -->
    <!-- begin invoice -->
    <div class="invoice">
        <!-- begin invoice-company -->
        <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
             <a class="btn btn-sm btn-white m-b-10 p-l-5" href="/proyectos/carpetas/{{$proyectos->id_proyecto}}"><i class="fa fa-archive t-plus-1 text-danger fa-fw fa-lg"></i> Ver carpetas</a>
            {{-- <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a> --}}
            </span>
            {{$proyectos->nombre_proyecto}}
        </div>
        <!-- end invoice-company -->
        <!-- begin invoice-header -->
        {{-- <div class="invoice-header">
            <div class="invoice-from">
                <small>from</small>
                <address class="m-t-5 m-b-5">
                    <strong class="text-inverse">Twitter, Inc.</strong><br>
                    Street Address<br>
                    City, Zip Code<br>
                    Phone: (123) 456-7890<br>
                    Fax: (123) 456-7890
                </address>
            </div>
            <div class="invoice-to">
                <small>to</small>
                <address class="m-t-5 m-b-5">
                    <strong class="text-inverse">Company Name</strong><br>
                    Street Address<br>
                    City, Zip Code<br>
                    Phone: (123) 456-7890<br>
                    Fax: (123) 456-7890
                </address>
            </div>
            <div class="invoice-date">
                <small>Invoice / July period</small>
                <div class="date text-inverse m-t-5">August 3,2012</div>
                <div class="invoice-detail">
                    #0000123DSS<br>
                    Services Product
                </div>
            </div>
        </div> --}}
        <!-- end invoice-header -->
        <!-- begin invoice-content -->
        <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
                <table class="table table-invoice">
                    <thead>
                        <tr>
                            <th>Nombre Actividad</th>
                            <th class="text-center" width="10%">Codigo Proyecto</th>
                            <th class="text-center" width="10%">Requisicion</th>
                            <th class="text-center" width="10%">OSC</th>
                            <th class="text-center" width="10%">Bases</th>
                            <th class="text-center" width="10%">Comprador</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($actividades as $actividad)
                            <tr>
                                <td>
                                    <span class="text-inverse">{{$actividad->nombre_actividades}}</span><br>
                                </td>
                                <td class="text-center">{{$actividad->cod_proyecto}}</td>
                                <td class="text-center">{{$actividad->requisicion}}</td>
                                <td class="text-center">{{$actividad->osc}}</td>
                                <td class="text-center">{{$actividad->bases}}</td>
                                <td class="text-center">{{$actividad->comprador}}</td>
                            </tr>
                            @endforeach                        
                      
                    </tbody>
                </table>
                {!! $actividades->links('pagination::bootstrap-4') !!}

            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            {{-- <div class="invoice-price">
                <div class="invoice-price-left">
                    <div class="invoice-price-row">
                        <div class="sub-price">
                            <small>SUBTOTAL</small>
                            <span class="text-inverse">$4,500.00</span>
                        </div>
                        <div class="sub-price">
                            <i class="fa fa-plus text-muted"></i>
                        </div>
                        <div class="sub-price">
                            <small>PAYPAL FEE (5.4%)</small>
                            <span class="text-inverse">$108.00</span>
                        </div>
                    </div>
                </div>
                <div class="invoice-price-right">
                    <small>TOTAL</small> <span class="f-w-600">$4508.00</span>
                </div>
            </div> --}}
            <!-- end invoice-price -->
        </div>
        <!-- end invoice-content -->
       
        <!-- begin invoice-footer -->
        <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
                Monitoreos
            </p>
            <p class="text-center">
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> monitoreos.org</span>
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:987144135</span>
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> admin@monitoreos.org</span>
            </p>
        </div>
        <!-- end invoice-footer -->
    </div>
    <!-- end invoice -->
@endsection
