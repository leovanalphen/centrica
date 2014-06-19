<?php

class User extends Model {
	public $name;
	
	
	public function get_user_by_id($user_id){
	
		$query = "
			SELECT	*
			FROM	users
			WHERE	user_id = " + $user_id;
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->query($query);
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); //moet nog juiste functie voor gebruikt worden...
			$dhb = null;

			return $result;
		}

		return null;
	}
	
	public function get_user_list(){
	
		$query = "
			SELECT	*
			FROM	users
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
	
	
	public function edit_user(/* alles wat een user heeft */) {
	
		$query = "
			UPDATE 	users
			SET 	/*alles*/
			WHERE	user_id = " + $user_id;
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$dbh->query($query);
			$dhb = null;
		}
	}
	
	public function add_user(/* alles wat een user heeft */) {
		
		$query = "
			INSERT INTO	users (
				/*alles */
				)
			VALUES		'/*de input*/'
		";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$dbh->query($query);
			$dhb = null;
		}
	}
	
	public function delete_user($user_id) {
		
		$query = "
			DELETE FROM users
			WHERE		user_id = " + $user_id;
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$dbh->query($query);
			$dhb = null;
		}
	}
	
}