<?php   

$listar     = null;
$directorio = opendir("Proyectos/");

while ($elemento = readdir($directorio)) {
    if ($elemento != '.' && $elemento != '..') {
        if (is_dir("Proyectos/" . $elemento)) {
            $listar .= "<li><a href='Proyectos/$elemento' target='_blank'>$elemento/</a></li>";
        } else {
            $listar .= "<li><a href='Proyectos/$elemento' target='_blank'>$elemento</a></li>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Links -->
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/bootstrap.js" rel="stylesheet"> 
    <link href="js/bootstrap.min.js" rel="stylesheet">
    <link href="https://wayf.ucol.mx/ucol_mini.png" rel="image_src"/>
    <link href="https://www.ucol.mx/cms/img/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="//www.ucol.mx/cms/beta/css/udc.css" rel="stylesheet">
    <link rel="stylesheet" href="//www.ucol.mx/cms/beta/css/theme.min.css"/>
    <link rel="stylesheet" href="//www.ucol.mx/cms/beta/css/universidad_de_colima.css"/>
    <link rel="stylesheet" href="//www.ucol.mx/cms/beta/dist/css/ie10-viewport-bug-workaround.css">

    <!-- meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="author" content="Universidad de Colima"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Universidad de Colima"/>
    <meta property="og:image" content="https://wayf.ucol.mx/ucol_mini.png"/>
    <meta property="og:locale:alternate" content="es_ES"/>
    <meta property="og:site_name" content="Universidad de Colima"/>
    <meta name='google-site-verification' content='DFaotchV2tcX1s9mJW0zb204etzv4C55-_YJ_1YkGf4'/>
    <meta property='og:title' content='Universidad de Colima'/>
    <meta property='og:url' content='http://www.ucol.mx'/>
    <meta property='og:description' content='Portal Web de la Universidad de Colima'/>
    <!-- script -->
    <script src="//www.ucol.mx/cms/beta/js/jquery.min.js" type="text/javascript"></script>

    <title>Gestor De Proyectos</title>
</head>

<body>
  <!-- nav -->
<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
			<button class="navbar-toggler hidden-md-up pull-right" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
			&#9776; </button>
			<div class="collapse navbar-toggleable-sm" id="navbar-header">
				<a class="navbar-brand" id="logo" >Universidad de Colima</a>
			</div>
		</div>
	</div>
</nav>

  <!-- Titulo -->
<div class="page-header">
  <h1>Sistema Gestor De Proyectos</h1>
</div>

  <!-- table -->
<div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">Proyectos</th>
      <th scope="col" class="text-center">Descripción</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sistema de gestion de proyectos integradores</td>
      <td>Sistema web para la gestión de viajes escolares de la Facultad de Ingeniería Electromecánica de la Universidad de Colima</td>
      <td><button type="button" class="btn btn-success" onClick="location.href='Proyectos/sigespi/public/'" >Entrar</button></td>
    </tr>
    <tr>
      <td>Sistema para la gestión de viajes escolares </td>
      <td>Sistema web para la gestión de proyectos integradores de la Universidad de Colima</td>
      <td><button type="button" class="btn btn-success" onClick="location.href='Proyectos/sgve/public/'" >Entrar</button></td>
    </tr>
    </tbody>
</table>
</div>
<!-- Footer -->
<div id="footer">
<footer id="p-footer">
		<div class="inner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 ">
						<div class="address text-center">
							<ul>
								<li><i class="icon-address"></i><strong>Direcci&oacute;n:</strong>
								Km 20, carretera Manzanillo - Cihuatlan, ejido El Naranjo, CP. 28868, Manzanillo, Colima, México </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="p-copyright">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						 &copy; Derechos Reservados 2013-2017 Universidad de Colima
					</div>
				</div>
			</div>
		</div>
</footer>
</div>
</body>
</html>