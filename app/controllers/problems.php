<?php 

class problems extends Controller {
	
	public function index() {

		$model = $this->model('Problem');

		$problems = $model->getList();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('problems/list', ['problemList' => $problems, 'title' => 'Problemen Lijst', 'notice' => $this->notice]);
	}

	public function create() {
		
		$model = $this->model('Problem');

		$this->view('problems/create', []);
	}

	public function add() {
		
		var_dump($_POST);

		$this->view('problems/create', []);
	}
}