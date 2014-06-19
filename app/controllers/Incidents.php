<?php 

class Incidents extends Controller {
	
	public function index() {

		$model = $this->model('Incident');

		$incidents = $model->getList();

		$notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('incidents/list', ['incidentList' => $incidents, 'title' => 'Incidenten Lijst', 'notice' => $notice]);
	}

	public function create() {
		
		$model = $this->model('Incident');

		$this->view('incidents/create', []);
	}

	public function add() {
		
		var_dump($_POST);

		$this->view('incidents/create', []);
	}
}