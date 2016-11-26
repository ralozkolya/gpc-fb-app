<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends MY_Controller {

	public function __construct() {

		parent::__construct();

		if(!$this->data['user']) {
			redirect('login');
		}
	}

	public function index($step = 1) {

		$this->load->view('step_1', $this->data);
	}

	public function check() {

		$this->load->library('form_validation');

		if($this->form_validation->run('check')) {
			$this->load->view('step_2', $this->data);
		}

		else {
			$this->load->view('error', $this->data);
		}
	}

	public function finish() {
		$this->load->view('finish', $this->data);
	}

	public function privacy() {
		echo '<h1>Under construction...</h1>';
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */