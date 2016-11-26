<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = [];

	public function __construct() {

		date_default_timezone_set('Asia/Tbilisi');

		parent::__construct();

		$this->data['title'] = lang('title');
		$this->data['user'] = $this->fb->get_user();
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */