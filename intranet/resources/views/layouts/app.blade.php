<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">


    <title>@yield('title') Intranet | GreengField</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="GreengField" name="description" />
    <meta content="@OnlyChristopher" name="author" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/theme/default.css') }}" rel="stylesheet" id="theme" />
    <link href="{{ asset('assets/css/default/theme/green.css') }}" rel="stylesheet">
    <!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />

	<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/jstree/dist/themes/default/style.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/demo/ui-tree.demo.min.js') }}"></script>


	<!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="dashboard">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

    <!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="{{action('HomeController@index')}}" class="navbar-brand"><img src="{{ asset('assets/img/logo/logo.jpg') }}" alt=""></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
                <li>
                        <form class="navbar-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Busqueda">
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                </li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="{{ asset('assets/img/user/user-1.jpg') }}" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="{{ asset('assets/img/user/user-2.jpg') }}" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('assets/img/user/user-13.jpg') }}" alt="" />
						<span class="d-none d-md-inline">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						@if(Auth::user()->profile == 1)
							<a href="{{ route('usuarios.create') }}" class="dropdown-item">Registrar Usuarios</a>
						@endif
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="{{ asset('assets/img/user/user-13.jpg') }}" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
								<small>{{ Auth::user()->email }}</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> {{ Auth::user()->job }}</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegacion</li>
					<li class="@yield('clase-active-inicio')">
					    <a href="{{action('HomeController@index')}}">
					    <i class="fa fa-home"></i>
					    <span>Inicio</span>
					    </a>
					</li>
                    @if(Auth::user()->profile == 1 || Auth::user()->profile == 2)
                    <li class="has-sub active @yield('clase-open-documentos') @yield('clase-active-documentos')">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-align-left"></i>
							<span>Areas</span>
						</a>
						<ul class="sub-menu" style="@yield('clase-open-documentos-block')">
								@foreach($menus[0] as $menu)
									<li class="has-sub @yield('clase-open-documentos-'.$menu->icono_menu.'')  @yield('clase-active-documentos-'.$menu->icono_menu.'')">
										<a href="javascript:;">
											<b class="caret"></b>
											{{ $menu->desc_menu}}
										</a>
										<ul class="sub-menu @yield('clase-active-documentos-'.$menu->icono_menu.'')">
											<li class="@yield('clase-active-plantillas-'.$menu->icono_menu.'')"><a href="{{route('plantillasAreas', ['id' => $menu->icono_menu])}}">{{ __('Plantillas') }}</a></li>
											<li class="@yield('clase-active-procedimientos-'.$menu->icono_menu.'')"><a href="{{route('procedimientosAreas', ['id' => $menu->icono_menu])}}">{{ __('Procedimientos') }}</a></li>
											<li class="@yield('clase-active-miscelaneos-'.$menu->icono_menu.'')"><a href="{{route('miscelaneosAreas', ['id' => $menu->icono_menu])}}">{{ __('Miscelaneos') }}</a></li>
										</ul>
									</li>
								@endforeach
						</ul>
					</li>
                    @endif
                    @if(Auth::user()->profile == 1 || Auth::user()->profile == 2 || Auth::user()->profile == 3 )
					<li class="has-sub active @yield('clase-open-proyecto') @yield('clase-active-proyecto')">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-th-large"></i>
							<span>Proyectos</span>
						</a>
						<ul class="sub-menu" >
                                <li class="@yield('clase-active-proyectos')">
                                    <a href="{{action('ProyectosController@index')}}">{{ __('Listado de Proyectos') }}</a>
                                </li>
							@if(Auth::user()->profile == 1 || Auth::user()->profile == 2)
								<li class="@yield('clase-active-actividades')">
									<a href="{{action('ActividadesController@index')}}">{{ __('Listado de Actividades') }}</a>
								</li>
							@endif
                                <li class="@yield('clase-active-temporales')">
                                    <a href="{{action('TemporalesController@index')}}">{{ __('Documentos Temporales') }}</a>
                                </li>

						</ul>
					</li>
                    @endif
                    @if(Auth::user()->profile == 1)
					<li class="has-sub @yield('clase-open-administracion') @yield('clase-active-administracion')">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-th-large"></i>
							<span>Administración</span>
						</a>
						<ul class="sub-menu" style="display: @yield('clase-block-usuarios');">
                                <li class="@yield('clase-active-clientes')">
                                    <a href="{{action('ClientesController@index')}}">{{ __('Mantenimiento de Clientes') }}</a>
                                </li>
                                <li class="@yield('clase-active-usuarios')">
                                    <a href="{{action('UsuariosController@index')}}">{{ __('Mantenimiento de Usuarios') }}</a>
                                </li>
						</ul>
					</li>
                    @endif

					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
        </div>
		<!-- end #content -->

		<!-- begin #footer -->
		<div id="footer" class="footer">
			&copy; 2019 GreEngField - All Rights Reserved
		</div>
		<!-- end #footer -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->


<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('assets/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="../assets/crossbrowserjs/html5shiv.js"></script>
<script src="../assets/crossbrowserjs/respond.min.js"></script>
<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
<script src="{{ asset('assets/js/apps.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
<script src="{{ asset('assets/plugins/highlight/highlight.common.js') }}"></script>
<script src="{{ asset('assets/js/demo/render.highlight.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}" charset="UTF-8"></script>
<script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jstree/dist/jstree.min.js') }}"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
		TreeView.init();
		$(".multiple-select2").select2({
			placeholder: "Seleccione Usuarios"
		});
        console.log("%c Site developed with -   by  @OnlyChristopher " ,"background: #32a932; padding:5px; font-size: 12px; color: #ffffff");

    });
	$("#fecha_proc").datepicker({
		language: 'es',
		todayHighlight: !0,
		autoclose: !0,
		format: 'yyyy-mm-dd',
	});
	$(".fecha").datepicker({
		language: 'es',
		todayHighlight: !0,
		autoclose: !0,
		format: 'yyyy-mm-dd',
	});
	$('[data-click="swal-danger-plantillas"]').click(function (e) {
		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina el registro, no se puede recuperar",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				$('#btn-plantillas-delete').click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

	});

	$('[data-click="swal-danger-procedimientos"]').click(function (e) {
		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina el registro, no se puede recuperar",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				$('#btn-procedimientos-delete').click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

    });

	$('[data-click="swal-danger-miscelaneos"]').click(function (e) {
		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina el registro, no se puede recuperar",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				$('#btn-miscelaneos-delete').click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

	});

	$('[data-click="swal-danger-temporales"]').click(function (e) {
		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina el registro, no se puede recuperar",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				let id = $(this).data('id');
				//console.log(id);
				$('#btn-temporales-delete'+'-'+id).click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

	});

	$('[data-click="swal-danger-folders"]').click(function (e) {
		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina la carpeta , se eliminaran los archivos y no podra recuperarlos, se recomienda descargar los archivos",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				let id = $(this).data('id');
				//console.log(id);
				$('#btn-folders-delete'+'-'+id).click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

	});

	$('[data-click="swal-danger-proyectos"]').click(function (e) {

		swal({
			title: "Desea eliminar registro?",
			text: "Recuerde que si elimina el registro, no se puede recuperar",
			icon: "error",
			buttons: {
				cancel: {text: "Cancelar", value: null, visible: !0, className: "btn btn-default", closeModal: !0},
				confirm: {text: "Eliminar", value: !0, visible: !0, className: "btn btn-danger", closeModal: !0}
			}
		}).then((willDelete) => {
			if (willDelete) {
				$('#btn-proyectos-delete').click();
				swal("Registro Eliminado!", {
					icon: "success",
				});
			} else {
				swal("Cancelo!");
			}
		});

	});

    $('.alert[data-auto-dismiss]').each(function (index, element) {
        var $element = $(element),
            timeout  = $element.data('auto-dismiss') || 8000;

        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });

	$("select[name='id_carpetaprincipal']").change(function(){
		let codigo = $(this).val();
		let id_proyecto = $("input[name='id_proyecto']").val();
		let token = $("input[name='_token']").val();
		$.ajax({
			url: "<?php echo route('select-ajax') ?>",
			method: 'POST',
			data: {codigo:codigo,id_proyecto:id_proyecto, _token:token},
			success: function(data) {
				$("select[name='id_carpetasecundaria']").html('');
				$("select[name='id_carpetasecundaria']").html(data.options);
				$("select[name='id_carpetasecundaria']").selectpicker('refresh');

			}
		});
	});

	let edit_folder = function (id) {
		let url = "{{ route('carpetasProyectosEdit', ':id') }}";
		url = url.replace(':id', id);

		let urlTwo = "{{ route('fileCarpetasProyectosShow',':id') }}";
		urlTwo = urlTwo.replace(':id', id);


		$('#id_carpetasecundaria').val(url);
		$('#id_archivos').val(urlTwo);

	};

	let detail_folder = function(proyecto,id){
		let url ="{{ route('carpetasProyectosList', ['proyecto' => ':proyecto' , 'id' => ':id'])}}"

		//console.log(url);
		url = url.replace(':id',id);
		url = url.replace(':proyecto',proyecto);


		$('#id_carpetaprincipal').val(url);
	}

	$('.edit-folder').on('click',function () {
		let url = $('#id_carpetasecundaria').val();

		if(url){
			document.location.href=url;
		}else{
			alert('Seleccione carpeta a editar');
		}
	});

	$('.edit-file').on('click',function () {
		let url = $('#id_archivos').val();

		if(url){
			document.location.href=url;
		}else{
			alert('Seleccione carpeta a editar');
		}
	});

	$('.detail-folder').on('click',function(){
		let url = $('#id_carpetaprincipal').val();

		if(url){
			document.location.href=url;
		}else{
			alert('Seleccione carpeta principal');
		}
	})


</script>

</body>

</html>
