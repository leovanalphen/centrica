<?php

class Incident extends Model {
	
	public function getList() {

		$query = "
			SELECT 
				INC.incident_id,
				INC.datum,
				INC.start_tijd,
				INC.eind_tijd,
			    HW.identificatie_code AS HardwareID,
			    HW.aanschaf_jaar,
			    OS.identificatie_code AS Besturingsysteem,
			    Leverancier.leverancier_naam AS leverancier,
			    Producent.producent_naam AS Producent,
			    group_concat(SW.identificatie_code
			        separator ', ') as `Software`,
				INC.omschrijving,
				INC.workaround
			FROM
			    Hardware AS HW
			        LEFT JOIN
			    Leverancier ON HW.leverancier_id = Leverancier.leverancier_id
			        LEFT JOIN
			    Producent ON Producent.producent_id = HW.producent_id
			        LEFT JOIN
			    Software As OS ON OS.software_id = HW.besturingsysteem
			        LEFT JOIN
			    Software_Hardware AS SW_HW ON HW.hardware_id = SW_HW.hardware_id_fk
			        LEFT JOIN
			    Software AS SW ON SW_HW.software_id_fk = SW.software_id
					RIGHT join
				Incidenten AS INC ON INC.hardware_id = HW.hardware_id

			GROUP BY INC.incident_id
			ORDER BY INC.hardware_id";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->query($query);
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			$dhb = null;

			return $result;
		}

		return null;
	}
}
