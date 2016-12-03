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

		$this->data['input'] = $this->session->userdata('input');
		$this->session->unset_userdata('input');
		$this->load->view('step_1', $this->data);
	}

	public function check() {

		$this->session->set_userdata('input', $this->input->post());
		$this->load->library('form_validation');

		if($this->form_validation->run('check')) {

			$this->load->database();

			$ticket_number = $this->input->post('ticket-number');
			$card_number = $this->input->post('card-number');
			$phone = $this->input->post('phone');

			$this->load->model('FacebookOrder');

			if(!$this->FacebookOrder->exists($ticket_number, $card_number)) {
				$this->FacebookOrder->add($ticket_number, $card_number, $phone);
				$this->load->view('step_2', $this->data);
			}

			else {
				$this->data['error_description'] = lang('already_used');
				$this->load->view('error', $this->data);
			}
		}

		else {
			$this->data['error_description'] = lang('incorrect_data');
			$this->load->view('error', $this->data);
		}
	}

	public function finish() {

		$this->load->view('finish', $this->data);
		$this->load->database();
	}

	public function privacy() {

		echo '<h1>Under construction...</h1>';
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */