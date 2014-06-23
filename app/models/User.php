<?php

class User extends Model {
	protected $userId;
	protected $userName;
	protected $email;
	protected $role;
	
	public function encryptPassword($password) {
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		return $hashedPassword;
	}

	public function addUser($data) {

		if($data['password'] == $data['passwordControl']) {
			$hashedPassword = self::encryptPassword($data['password']);
		} else {
			return ['error', 'passwordMismatch'];
		}

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
			$sth->bindParam(':password', $hashedPassword);
			$sth->bindParam(':role', $data['role']);
			$result = $sth->execute();
			$dhb = null;

			if($result) {
				return 'success';
			} 
		}

		return 'error';
	}

	public function getUserRole($userEmail){

		$query = "
			SELECT	role
			FROM	users
			WHERE	email = ?";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->execute([$userEmail]);
			$result = $sth->fetch();
			$dhb = null;

			return $result['role'];
		}

		return null;
	}

	public function checkUser($userInfo){
		$userEmail = $userInfo['email'];
		$userPassword = $userInfo['password'];

		$user = self::getUserByEmail($userEmail);

		if($userEmail == $user['email'] && password_verify($userPassword, $user['password'])){
			return true;
		} 

		return false;
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

			$return = ['user_id' => $result['user_id'], 'userName' => $result['username'], 'email' => $result['email'], 'password' => $result['password'], 'role' => $result['role']];

			return $return;
		}

		return null;
	}

	public function getUserByEmail($email){
	
		$query = "
			SELECT	*
			FROM	users
			WHERE	email = ?";
		
		$dbh = parent::connectDB();
		
		if($dbh) {
			$sth = $dbh->prepare($query);
			$sth->execute([$email]);
			$result = $sth->fetch();
			$dhb = null;

			$return = ['user_id' => $result['user_id'], 'userName' => $result['username'], 'email' => $result['email'], 'password' => $result['password'], 'role' => $result['role']];

			return $return;
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