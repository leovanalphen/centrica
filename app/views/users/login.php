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
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div><h2>Centrica Inloggen</h2></div>
				<?php  if(isset($notice) && $notice['type'] != ''){echo '<div class="row"><div id="alert" class="alerts"><div class="alert-message ' . $notice['type'] . '"><a class="close" href="#">x</a>' . $notice['msg'] . '</div></div></div>';}	?>
				<form action="/public/users/authenticate" method="post" role="form">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input id="email" type="email" name="email" class="form-control" placeholder="Voer e-mailadres in">
					</div>
					<div class="form-group">
						<label for="password">Wachtwoord</label>
						<input id="password" type="password" name="password" class="form-control" placeholder="Voer wachtwoord in">
					</div>
					<div>
						<div class="pull-left">
							<input class="btn btn-default" type="submit">
						</div>
						<div class="pull-left">
							<div><a class="btn btn-default" style="margin-left: 10px;" href="/public/users/signup/">Registeren</a></div>
						</div>
					</div>
				</form>
			</div>
		<div class="col-md-4"></div>
		</div>
	</div>
	<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				<div class="container-fluid">
				<div class="navbar-header">
  					<a class="navbar-brand" href="/public">Centrica Copyright 2014</a>
  				</div>
			</div>
		</nav>
	</footer>
</body>
</html>