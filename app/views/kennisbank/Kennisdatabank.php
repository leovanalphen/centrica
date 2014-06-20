<?php require_once('../app/views/layouts/header.php'); ?>
<table class="table">
   <caption>Kennisdatabank Lijst</caption>
   <thead>
      <tr>
         <th>Probleem ID</th>
         <th>Categorie</th>
         <th>Omschrijving</th>
         <th>Workaround</th>
      </tr>
   </thead>
   <tbody>
   		<?php 
   			foreach ($kennisdatabanklist as $v1) {
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