<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends MY_Controller {

	public function __construct() {

		parent::__construct();

		if(!$this->data['user']) {
			redirect('login');
		}
	}

	public function index() {

		$this->data['input'] = $this->session->userdata('input');
		$this->session->unset_userdata('input');
		$this->view('step_1');
	}

	public function check() {

		$this->session->set_userdata('input', $this->input->post());
		$this->load->library('form_validation');

		if($this->form_validation->run('check')) {

			$data = $this->input->post();

			if($this->check_db($data, 1)) {
				$this->view('step_2');
			}
		}

		else {
			$this->data['error_description'] = lang('incorrect_data');
			$this->view('error');
		}
	}

	public function finish() {

		$input = $this->session->userdata('input');
		
		if($input) {

			if($this->check_db($input, 0)) {
				$phone = $input['phone'];
				$this->load->library('Sms');
				$this->sms->send($phone);
				$this->session->unset_userdata('input');
				$this->view('finish');
			}
		}

		else {
			$this->data['error_description'] = lang('incorrect_data');
			$this->view('error');
		}
	}

	public function privacy() {

		echo '<h1>Under construction...</h1>';
	}

	private function check_db($data, $check) {

		$this->load->database();

		$this->load->model('FacebookOrder');

		try {
			$this->FacebookOrder->procedure($data, $check);
			return TRUE;
		}

		catch(AlreadyUsedException $e) {
			$this->data['error_description'] = lang('already_used');
			$this->view('error');
		}

		catch(Exception $e) {
			$this->data['error_description'] = lang('incorrect_data');
			$this->view('error');
		}
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */