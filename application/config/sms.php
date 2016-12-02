<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['username'] = getenv('SMS_USER');
$config['password'] = getenv('SMS_PASS');
$config['client_id'] = getenv('SMS_CLIENT_ID');
$config['service_id'] = getenv('SMS_SERVICE_ID');
