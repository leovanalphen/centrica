<?php

class Problem extends Model {
	
	public function getList() {
/* nog even af maken */
		$query = "
			SELECT 	probleem.*
			,		incidenten.incident_id
			FROM	incidenten
			,		probleem
			WHERE	incidenten.ProbleemID = probleem.ProbleemID
			GROUP BY probleem.ProbleemID
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
	
	public function create($data){
		
		$query = "
			INSERT INTO	probleem (
				Categorie,
				Omschrijving
				)
			VALUES (
				:categorie,
				:omschrijving
				)
			";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->bindParam(':categorie', $data['categorie']);
			$sth->bindParam(':omschrijving', $data['omschrijving']);
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