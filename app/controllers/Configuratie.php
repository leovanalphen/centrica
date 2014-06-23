<<<<<<< HEAD
<?php 

class Configuratie extends Controller {
	
	public function index() {

		$model = $this->model('ConfiguratieItems');

		//$configuratie = $model->getList();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/index', [/*'ciList' => $configuratie,*/ 'title' => 'Configuratie Lijst', 'notice' => $this->notice]);
	}

	public function listSW() {
		
		$model = $this->model('ConfiguratieItems');

		$configuratie = $model->getList_SW();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/listSW', ['ciList' => $configuratie, 'title' => 'Configuratie Lijst']);
		
	}
	
	public function listHW() {
		
		$model = $this->model('ConfiguratieItems');

		$configuratie = $model->getList_HW();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/listHW', ['ciList' => $configuratie, 'title' => 'Configuratie Lijst']);
		
	}
	
	public function create() {
		
		$model = $this->model('ConfiguratieItems');

		$this->view('configuratie/create', []);
	}

	public function add() {
		
		var_dump($_POST);

		$this->view('configuratie/create', []);
	}
=======
<?php 

class Configuratie extends Controller {
	
	public function index() {

		$model = $this->model('ConfiguratieItems');

		//$configuratie = $model->getList();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/index', [/*'ciList' => $configuratie,*/ 'title' => 'Configuratie Lijst', 'notice' => $this->notice]);
	}

	public function listSW() {
		
		$model = $this->model('ConfiguratieItems');

		$configuratie = $model->getList_SW();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/listSW', ['ciList' => $configuratie, 'title' => 'Configuratie Lijst']);
		
	}
	
	public function listHW() {
		
		$model = $this->model('ConfiguratieItems');

		$configuratie = $model->getList_HW();

		$this->notice = ['type' => 'error', 'msg' => 'test'];

		$this->view('configuratie/listHW', ['ciList' => $configuratie, 'title' => 'Configuratie Lijst']);
		
	}
	
	public function create() {
		
		$model = $this->model('ConfiguratieItems');

		$this->view('configuratie/create', []);
	}

	public function add() {
		
		var_dump($_POST);

		$this->view('configuratie/create', []);
	}
>>>>>>> FETCH_HEAD
}