<?php 

class Users extends Controller {

	public function signup($type = '', $status = '') {

		if($status != '' && $type != ''){
			$this->notice['type'] = $type;
			if($type == 'error' && $status == 'passwordmismatch') {
				$this->notice['msg'] = 'Wachtwoorden komen niet overeen';
			} 
		}

		$this->view('users/signup', ['notice' => $this->notice]);
	}

	public function login($type = '') {

		if($type != '' && $type == 'error'){
			$this->notice['type'] = 'error';
			$this->notice['msg'] = 'Gebruiker bestaat niet of inloggegevens incorrect';
		}
		if($type != '' && $type == 'success'){
			$this->notice['type'] = 'success';
			$this->notice['msg'] = 'Account successvol aangemaakt, u kunt nu inloggen';
		}

		$this->view('users/login', ['notice' => $this->notice]);

	}

	public function logOut($type = '') {
		
		unset($_SESSION['loggedIn']);
		unset($_SESSION['role']);
		unset($_SESSION['user_id']);
		unset($_SESSION['userName']);
		unset($_SESSION['email']);

		header("Location: /public/users/login");
		die();

	}

	public function authenticate() {
		//Get credentials send through POST
		$credentials = $_POST;
		//Get the user model
		$model = $this->model('User');
		//check to see if credentials are correct
		$authenticated = $model->checkUser($credentials);

		if($authenticated) {

			$userInfo = $model->getUserByEmail($credentials['email']);

			$_SESSION['loggedIn'] = true;
			$_SESSION['user_id'] = $userInfo['user_id'];
			$_SESSION['userName'] = $userInfo['userName'];
			$_SESSION['email'] = $userInfo['email'];
			$_SESSION['role'] = $userInfo['role'];
			header("Location: /public/");
			die();
		}

		header("Location: /public/users/login/error");
		die();

	}
	
	public function index($type = '', $status = '') {

		$model = $this->model('User');

		$userList = $model->getList();

		if($status != '' && $type != ''){
		$this->notice['type'] = $status;
			if($type == 'create') {
				$this->notice['msg'] = 'Gebruiker succesvol toegevoegd';
			} elseif ($type == 'show') {
				$this->notice['msg'] = 'Gebruiker bestaat niet';
			}
		}

		$this->view('users/list', ['userList' => $userList, 'title' => 'Gebruikers Lijst', 'notice' => $this->notice]);
	}

	public function create($type = '', $status = '') {
		

		$this->view('users/create', []);
	}

	public function add($frontendUser) {
		
		$userInfo = ['username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'passwordControl' => $_POST['passwordControl'], 'role' => '0']; 
		
		if(!$frontendUser){
			$userInfo['role'] = $_POST['role'];
		}

		$model = $this->model('User');

		//voeg gebruiker toe aan database
		$status = $model->addUser($userInfo);

		//error check
		if($status[0] == 'error' && $status[1] == 'passwordMismatch' && !$frontendUser){
			header("Location: /public/users/create/error/passwordmismatch");
			die();
		} elseif($status[0] == 'error' && $status[1] == 'passwordMismatch' && $frontendUser) {
			header("Location: /public/users/signup/error/passwordmismatch");
			die();
		}

		//als toevoegen aan DB is gelukt stuur dan terug naar gebruikers index
		if($status == 'success' && !$frontendUser){
			header("Location: /public/users/index/create/success/");
			die();
		} else {
			header("Location: /public/users/login/success/");
			die();
		}
	}

	public function show($id = '') {
	
		if($id == '') {
			header("Location: /public/users/index/show/error/");
			die();			
		}

		$model = $this->model('User');

		$user = $model->getUser($id);

		$this->view('users/show', [$user]);	
	}
}