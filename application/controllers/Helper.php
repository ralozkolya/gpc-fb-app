<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends MY_Controller {

	public function index() {
		$this->view('add_to_fb');
	}

	public function redirect() {
		redirect('https://www.facebook.com/gpcvizrunoTsicocxleze/app/624359667744524/');
	}

}

/* End of file Add_to_fb.php */
/* Location: ./application/controllers/Add_to_fb.php */