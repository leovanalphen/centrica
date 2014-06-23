<?php 

class Kennisdatabank extends Controller {
	
	public function index() {

		$model = $this->model('kennisdb');

		$kennisdatabank = $model->getList();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('kennisbank/Kennisdatabank', ['kennisdatabanklist' => $kennisdatabank, 'title' => 'Kennisdatabank Lijst', 'notice' => $this->notice]);
	}

	public function create() {
		
		$model = $this->model('Kennisdatabank');

		$this->view('kennisdatabank/create', []);
	}

	public function add() {
		
		var_dump($_POST);

		$this->view('kennisdatbank/create', []);
	}
}