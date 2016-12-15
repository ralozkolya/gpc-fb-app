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
		$this->view('step_1');
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
				$this->view('step_2');
			}

			else {
				$this->data['error_description'] = lang('already_used');
				$this->view('error');
			}
		}

		else {
			$this->data['error_description'] = lang('incorrect_data');
			$this->view('error');
		}
	}

	public function finish() {

		$this->load->database();
		$this->load->model('FacebookOrder');

		$input = $this->session->userdata('input');
		
		if($input) {

			try {
				$this->FacebookOrder->check($input);
				$phone = $input['phone'];
				$this->load->library('Sms');
				$this->sms->send($phone);
				$this->session->unset_userdata('input');
				$this->view('finish');
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

		else {
			$this->data['error_description'] = lang('incorrect_data');
			$this->view('error');
		}
	}

	public function privacy() {

		echo '<h1>Under construction...</h1>';
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */