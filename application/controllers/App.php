<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	private $data = [];

	public function __construct() {

		date_default_timezone_set('Asia/Tbilisi');

		parent::__construct();

		$this->data['title'] = lang('title');
		$this->data['user'] = $this->fb->get_user();
	}

	public function index($step = 1) {

		$user = $this->data['user'];
		
		if(!empty($user)) {
			if($step = 1) {
				$this->load->view('step_1', $this->data);
			}
		}

		else {
			$this->load->view('login', $this->data);
		}
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */