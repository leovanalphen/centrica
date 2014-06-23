<?php require_once('../app/views/layouts/header.php'); ?>
<table class="table">
   <caption>Gebruikers Detail</caption>
   <thead>
      <tr>
         <th>Gebruikersnaam</th>
         <th>E-mail</th>
         <th>Rol</th>
      </tr>
   </thead>
   <tbody>
   		<tr>
   			<td><?php echo $data[0][1] ?></td>
   			<td><?php echo $data[0][2] ?></td>
   			<td><?php echo $data[0][4] ?></td>
		</tr>
   </tbody>
</table>
<?php require_once('../app/views/layouts/footer.php'); ?>