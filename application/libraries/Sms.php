<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms
{
	protected $ci;
	private $url = 'http://msg.ge/bi/sendsms.php';
	private $client;

	private $params;

	public function __construct($params) {

        $this->ci =& get_instance();

        $this->params = $params;

        $this->client = new GuzzleHttp\Client();
	}

	public function send($number) {

		$params = $this->params;

		if(0 !== strpos((string) $number, '995')) {
			if(strlen($number) === 9) {
				$number = '995' . $number;
			}
		}

		$result = $this->client->get($this->url, [
			'query' => [
				'username' => $params['username'],
				'password' => $params['password'],
				'client_id' => $params['client_id'],
				'service_id' => $params['service_id'],
				'to' => $number,
				'text' => $this->ci->load->view('sms', NULL, TRUE),
			],
		]);

		return 0 === strpos((string) $result->getBody(), '0000');
	}
}

/* End of file sms.php */
/* Location: ./application/libraries/sms.php */
