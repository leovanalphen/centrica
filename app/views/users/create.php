<?php require_once('../app/views/layouts/header.php'); ?>

<div class="row">
	<div class="col-md-5">
		<form action="/public/users/add" method="post" role="form">
			<div class="form-group">
				<label for="username">Gebruikersnaam</label>
				<input id="username" type="text" name="username" class="form-control" placeholder="Voer gebruikersnaam in">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input id="email" type="email" name="email" class="form-control" placeholder="Voer e-mailadres in">
			</div>
			<div class="form-group">
				<label for="password">Wachtwoord</label>
				<input id="password" type="password" name="password" class="form-control" placeholder="Voer wachtwoord in">
			</div>
			<div class="form-group">
				<label for="role">Rol</label>
				<select name="role" class="form-control">
 					<option value="0">Gebruiker</option>
 					<option value="1">Helpdesk medewerker</option>
 					<option value="2">Helpdesk mederwerker 2de lijn</option>
				</select>
			</div>
			<input class="btn btn-default" type="submit">
		</form>
	</div>
</div>

<?php require_once('../app/views/layouts/footer.php'); ?>