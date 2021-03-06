<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified JQuery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="/public/js/app.js"></script>

		<!-- Bootstrap -->
		<link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/public/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		<script src="/public/js/bootstrap.min.js"></script>

		<!-- Alerts -->
		<link href="/public/css/template.css" rel="stylesheet" type="text/css">
		<link href="/public/css/alerts.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="container-fluid">
		<?php  
		if(isset($notice) && $notice['type'] != ''){
			echo '<div class="row"><div id="alert" class="alerts"><div class="alert-message ' . $notice['type'] . '"><a class="close" href="#">x</a>' . $notice['msg'] . '</div></div></div>';
		}	
	 ?>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="/public">Centrica</a>
      		</div>
      		<ul class="nav navbar-nav">
      			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Incidenten<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="/public/incidents/index/">Overzicht</a></li>
            			<li><a href="/public/incidents/closed/">Historie</a></li>
            			<li class="divider"></li>
            			<li><a href="/public/incidents/create/">Aanmaken</a></li>
          			</ul>
        		</li>
        		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kennisdatabank<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="/public/kennisdatabank/index/">Overzicht</a></li>
            			<li class="divider"></li>
            			<li><a href="/public/kennisdatabank/create/">Aanmaken</a></li>
          			</ul></li>
        		<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beheer<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Gebruikers</li>
            			<li><a href="/public/users/index/">Overzicht</a></li>
            			<li><a href="/public/users/create/">Aanmaken</a></li>
          			</ul>
        		</li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Problemen<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Problemen</li>
            			<li><a href="/public/problems/index/">Overzicht</a></li>
            			<li><a href="/public/problems/create/">Aanmaken</a></li>
          			</ul>
        		</li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuratie<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Configuratie</li>
            			<li><a href="/public/configuratie/index/">Start</a></li>
						<li><a href="/public/configuratie/listSW/">Overzicht software</a></li>
						<li><a href="/public/configuratie/listHW/">Overzicht hardware</a></li>
            			<li class="divider"></li>
						<li><a href="/public/configuratie/create/">Nieuw CI</a></li>
          			</ul>
        		</li>
          </ul>
          <ul class="nav navbar-nav pull-right">
              <li><p class="navbar-text">Ingelogd als <?php echo $_SESSION['userName'] ?></p>
              <li><div><a class="btn btn-danger navbar-btn" href="/public/users/logout/">Uitloggen</a></div></li>
        	</ul>
    </div>
  		</div>
	</nav>
=======
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified JQuery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="/public/js/app.js"></script>

		<!-- Bootstrap -->
		<link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/public/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		<script src="/public/js/bootstrap.min.js"></script>

		<!-- Alerts -->
		<link href="/public/css/template.css" rel="stylesheet" type="text/css">
		<link href="/public/css/alerts.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="container-fluid">
		<?php  
		if(isset($notice) && $notice['type'] != ''){
			echo '<div class="row"><div id="alert" class="alerts"><div class="alert-message ' . $notice['type'] . '"><a class="close" href="#">x</a>' . $notice['msg'] . '</div></div></div>';
		}	
	 ?>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="/public">Centrica</a>
      		</div>
      		<ul class="nav navbar-nav">
      			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Incidenten<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="/public/incidents/index/">Overzicht</a></li>
            			<li><a href="/public/incidents/closed/">Historie</a></li>
            			<li class="divider"></li>
            			<li><a href="/public/incidents/create/">Aanmaken</a></li>
          			</ul>
        		</li>
        		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kennisdatabank<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="/public/kennisdatabank/index/">Overzicht</a></li>
            			<li class="divider"></li>
            			<li><a href="/public/kennisdatabank/create/">Aanmaken</a></li>
          			</ul></li>
        		<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beheer<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Gebruikers</li>
            			<li><a href="/public/users/index/">Overzicht</a></li>
            			<li><a href="/public/users/create/">Aanmaken</a></li>
          			</ul>
        		</li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Problemen<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Problemen</li>
            			<li><a href="/public/problems/index/">Overzicht</a></li>
            			<li><a href="/public/problems/create/">Aanmaken</a></li>
          			</ul>
        		</li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuratie<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li role="presentation" class="dropdown-header">Configuratie</li>
            			<li><a href="/public/configuratie/index/">Start</a></li>
						<li><a href="/public/configuratie/listSW/">Overzicht software</a></li>
						<li><a href="/public/configuratie/listHW/">Overzicht hardware</a></li>
            			<li class="divider"></li>
						<li><a href="/public/configuratie/create/">Nieuw CI</a></li>
          			</ul>
        		</li>
        	</ul>
    </div>
  		</div>
	</nav>
>>>>>>> FETCH_HEAD
	 <div class="content">