<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Alerts -->
		<link href="/public/css/template.css" rel="stylesheet" type="text/css">
		<link href="/public/css/alerts.css" rel="stylesheet" type="text/css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/public/js/app.js"></script>
	</head>
<body>
	<div class="container-fluid">
		<?php  
		if(isset($notice)){
			echo '<div id="alert" class="alerts"><div class="alert-message ' . $notice['type'] . '"><a class="close" href="#">x</a>' . $notice['msg'] . '</div></div>';
		}	
	 ?>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="/public">Centrica</a>
      		</div>
      		<ul class="nav navbar-nav">
        		<li><a href="/public/incidents/">Incidenten</a></li>
        		<li><a href="#">Kennisbank</a></li>
        	</ul>
    </div>
  		</div>
	</nav>
	 <div class="content">