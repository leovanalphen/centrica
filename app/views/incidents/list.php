<?php require_once('../app/views/header.php'); ?>
<table class="table">
   <caption>Incidenten Lijst</caption>
   <thead>
      <tr>
         <th>Incident ID</th>
         <th>Datum</th>
         <th>Start Tijd</th>
         <th>Eind Tijd</th>
         <th>Hardware ID</th>
         <th>Jaar van Aanschaf</th>
         <th>OS</th>
         <th>Leverancier</th>
         <th>Producent</th>
         <th>Software</th>
         <th>Incident Omschrijving</th>
         <th>Workaround</th>
      </tr>
   </thead>
   <tbody>
   		<?php 
   			foreach ($incidentList as $v1) {
   				echo '<tr>';
    			foreach ($v1 as $v2) {
        			echo "<td>$v2</td>";
    			}
    			echo '</tr>';
			}
		?>
   </tbody>
</table>
