<?php require_once('../app/views/layouts/header.php'); ?>

<table class="table">
   <caption>Gebruikers Lijst</caption>
   <thead>
      <tr>
         <th>Naam</th>
         <th>Leverancier</th>
         <th>Producent</th>
         <th>Soort</th>
      </tr>
   </thead>
   <tbody>
   		<?php 
   			foreach ($ciList as $v1) {
   				echo '<tr>';
    			foreach ($v1 as $v2) {
        			echo "<td>$v2</td>";
    			}
    			echo '</tr>';
			}
		?>
   </tbody>
</table>

<?php require_once('../app/views/layouts/footer.php'); ?>