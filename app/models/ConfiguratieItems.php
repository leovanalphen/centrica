<?php

class ConfiguratieItems extends Model {
	
	public function getList() {
	
		$query = "
			
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