<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Monitoreos</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/frontend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/frontend/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="/frontend/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="/frontend/assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
	<link href="/frontend/assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="/frontend/assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
	<link href="/frontend/assets/css/one-page-parallax/theme/green.css" id="theme" rel="stylesheet">
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/frontend/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
<!-- begin #page-container -->
<div id="page-container" class="fade">
	<!-- begin #header -->
	<div id="header" class="header navbar navbar-transparent navbar-fixed-top">
		<!-- begin container -->
		<div class="container">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">
					<span class="brand-logo"></span>
					<span class="brand-text">
							<span class="text-theme">Monitoreos</span>
						</span>
				</a>
			</div>
			<!-- end navbar-header -->

		</div>
		<!-- end container -->
	</div>
	<!-- end #header -->

	<!-- begin #home -->
	<div id="home" class="content has-bg home">
		<!-- begin content-bg -->
		<div class="content-bg" style="background-image: url(/frontend/assets/img/bg/bg-home.jpg);"
		     data-paroller="true"
		     data-paroller-factor="0.5"
		     data-paroller-factor-xs="0.25">
		</div>
		<!-- end content-bg -->
		<!-- begin container -->
		<div class="container home-content">
			<h1>Bienvenido a Monitoreos</h1>
			<a href="http://intranet.monitoreos.org" class="btn btn-theme">Ingresar a Intranet</a>
		</div>
		<!-- end container -->
	</div>
	<!-- end #home -->


</div>
<!-- end #page-container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="/frontend/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="/frontend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
<script src="/frontend/assets/crossbrowserjs/html5shiv.js"></script>
<script src="/frontend/assets/crossbrowserjs/respond.min.js"></script>
<script src="/frontend/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="/frontend/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="/frontend/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
<script src="/frontend/assets/plugins/paroller/jquery.paroller.min.js"></script>
<script src="/frontend/assets/js/one-page-parallax/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

</body>

</html>