<?php 

class Users extends Controller {
	
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

	public function create() {
		
		$model = $this->model('User');

		$this->view('users/create', []);
	}

	public function add() {
		
		$model = $this->model('User');

		//voeg gebruiker toe aan database
		$status = $model->addUser($_POST);

		//als toevoegen aan DB is gelukt stuur dan terug naar gebruikers index
		if($status == 'success'){
			header("Location: /public/users/index/create/success/");
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