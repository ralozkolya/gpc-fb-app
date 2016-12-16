<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacebookOrder extends CI_Model {

	public function procedure($data, $check) {

		$data = $this->db->escape($data);
		$date = date('Y-m-d H:i:s');

		$query = 
			"SET ANSI_WARNINGS ON

			EXEC InsFaceBookOrders
			@Check = '{$check}',
			@TransID = NULL,
			@TransDate = '{$date}',
			@CardID = N{$data['card-number']},
			@TicketID = N{$data['ticket-number']},
			@Phone = N{$data['phone']}";

		$host = getenv('DB_HOST');
		$db = getenv('DB_NAME');
		$user = getenv('DB_USER');
		$pass = getenv('DB_PASS');

		$con = mssql_connect($host, $user, $pass);

		if(!$con) throw new DBConnectionException();

		if(!mssql_select_db($db)) throw new DBConnectionException();

		$result = mssql_query($query, $con);

		$status = mssql_fetch_array($result)[0];

		if($status === 1) {
			return TRUE;
		}

		else if($status === 0) {
			throw new AlreadyUsedException();
		}

		else {
			throw new InvalidDataException();
		}
	}
}

class AlreadyUsedException extends Exception {}
class InvalidDataException extends Exception {}
class DBConnectionException extends Exception {}

/* End of file FacebookOrder.php */
/* Location: ./application/models/FacebookOrder.php */