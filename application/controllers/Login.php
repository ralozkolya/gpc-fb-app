<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index() {

		$this->load->view('login', $this->data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */