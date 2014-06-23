<<<<<<< HEAD
<?php

class Kennisdb extends Model {
	
	public function getList() {

		$query = "
			SELECT
				*
			FROM
			    Kennisdatabank AS KDB
			ORDER BY KDB.Problem_id";
		
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
=======
<?php

class Kennisdb extends Model {
	
	public function getList() {

		$query = "
			SELECT
				*
			FROM
			    Kennisdatabank AS KDB
			ORDER BY KDB.Problem_id";
		
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
>>>>>>> FETCH_HEAD
