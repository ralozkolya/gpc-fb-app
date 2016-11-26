<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
	'check' => [
		[
			'field' => 'ticket-number',
			'label' => 'lang:ticket_number',
			'rules' => 'required|numeric',
		],
		[
			'field' => 'card-number',
			'label' => 'lang:card_number',
			'rules' => 'required|numeric',
		],
		[
			'field' => 'phone',
			'label' => 'lang:phone',
			'rules' => 'required|numeric',
		],
	],
];