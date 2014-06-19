<?php

class Controller {
	
	public function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model();
	} 

	public function view($view, $data = []) {
	
		$title = 'Centrica';
		extract($data);
		require_once '../app/views/' . $view . '.php';
	}
}