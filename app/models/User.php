<?php

class User extends Model {
	protected $userId;
	protected $userName;
	protected $email;
	protected $role;
	
	public function addUser($data) {
		$query = "
			INSERT INTO users(
				username,
				email,
				password,
				role
				)
			VALUES (
				:username,
				:email,
				:password,
				:role
				)";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->bindParam(':username', $data['username']);
			$sth->bindParam(':email', $data['email']);
			$sth->bindParam(':password', $data['password']);
			$sth->bindParam(':role', $data['role']);
			$result = $sth->execute();
			$dhb = null;

			if($result) {
				return 'success';
			} 
		}

		return 'error';
	}

	public function getUser($userId){
	
		$query = "
			SELECT	*
			FROM	users
			WHERE	user_id = ?";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->execute([$userId]);
			$result = $sth->fetch();
			$dhb = null;

			return $result;
		}

		return null;
	}
	
public function getList() {

		$query = "
			SELECT 
				username,
				email,
				role
			FROM users
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
}