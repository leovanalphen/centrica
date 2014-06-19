<?php 

class Model {

	protected $host = 'localhost';
	protected $dbname = 'leertaak2f';
	protected $user = 'root';
	protected $pass  = 'stefan';
	
	protected function connectDB() {

		try {
			# MySQL with PDO_MYSQL
  			$dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
 			}
		catch(PDOException $e) {
    		echo $e->getMessage();
    		die();
			}

		return $dbh;
	}
}