<?php

class ConfiguratieItems extends Model {
	
	public function getList_hw() {
	
		$query = "
			SELECT		HW.identificatie_code
			,			HW.aanschaf_jaar
			,			HW.besturingsysteem
			,			LC.leverancier_naam
			, 			PD.producent_naam
			,			SO.soort
			FROM		hardware HW
			,			leverancier LC
			,			producent PD
			,			soort SO
			WHERE		HW.leverancier_id = LC.leverancier_id
			AND			HW.producent_id = PD.producent_id
			AND			HW.soort_id = SO.soort_id
			";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->query($query);
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			$dhb = null;

			return $result;
		}

		return null;
	}
	
	public function getList_sw() {
	
		$query = "
			SELECT 		SW.software_naam
			,			LC.leverancier_naam
			,			PD.producent_naam
			,			SO.soort
			FROM		software SW
			,			leverancier LC
			,			producent PD
			,			soort SO
			WHERE		SW.leverancier_id = LC.leverancier_id
			AND			SW.producent_id = PD.producent_id
			AND			SW.soort_id = SO.soort_id
			";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->query($query);
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			$dhb = null;

			return $result;
		}

		return null;
	}
	
	public function create_hw($data){
		
		$query = "
			INSERT INTO	hardware (
				)
			VALUES (
				)
			";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->bindParam(':...', $data['...']);
			$sth->bindParam(':...', $data['...']);
			$result = $sth->execute();
			$dhb = null;

			if($result) {
				return 'success';
			} 
		}

		return 'error';
	}
	
}

?>