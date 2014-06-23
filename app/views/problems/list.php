<<<<<<< HEAD
<?php require_once('../app/views/layouts/header.php'); ?>
<table class="table">
   <caption>Problemen Lijst</caption>
   <thead>
      <tr>
         <th>Probleem ID</th>
         <th>Categorie</th>
         <th>Probleem omschrijving</th>
         <th>Incident IDs</th>
      </tr>
   </thead>
   <tbody>
   		<?php 
   			foreach ($problemList as $v1) {
   				echo '<tr>';
    			foreach ($v1 as $v2) {
        			echo "<td>$v2</td>";
    			}
    			echo '</tr>';
			}
		?>
   </tbody>
</table>
=======
<?php require_once('../app/views/layouts/header.php'); ?>
<table class="table">
   <caption>Problemen Lijst</caption>
   <thead>
      <tr>
         <th>Probleem ID</th>
         <th>Categorie</th>
         <th>Probleem omschrijving</th>
         <th>Incident IDs</th>
      </tr>
   </thead>
   <tbody>
   		<?php 
   			foreach ($problemList as $v1) {
   				echo '<tr>';
    			foreach ($v1 as $v2) {
        			echo "<td>$v2</td>";
    			}
    			echo '</tr>';
			}
		?>
   </tbody>
</table>
>>>>>>> FETCH_HEAD
<?php require_once('../app/views/layouts/footer.php'); ?>