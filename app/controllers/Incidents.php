<?php 

class Incidents extends Controller {
	
	public function index() {

		$model = $this->model('Incident');

		$incidents = $model->getList();

		$this->view('incidents/list', ['incidentList' => $incidents, 'title' => 'Incidenten Lijst']);
	}


}