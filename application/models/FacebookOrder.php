<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacebookOrder extends CI_Model {

	private $table = 'FacebookOrders';

	public function exists($ticket_id, $card_id) {
		return $this->db->get_where($this->table, [
			'TicketID' => $ticket_id,
		])->num_rows();
	}

	public function add($data) {

		return $this->db->insert($this->table, [
			'TicketID' => $data['ticket-number'],
			'CardID' => $data['card-number'],
			'Phone' => $data['phone'],
			'TransDate' => date('Y-m-d H:i:s'),
		]);
	}

	public function check($data) {

		$data = $this->db->escape($data);
		$date = date('Y-m-d H:i:s');

		$result = $this->db->query("
			DECLARE @val int

			EXECUTE @val = InsFaceBookOrders
			@TransID = NULL,
			@TransDate = '{$date}',
			@CardID = N{$data['card-number']},
			@TicketID = N{$data['ticket-number']},
			@Phone = N{$data['phone']}

			SELECT 'status' = @val")->row()->status;

		if($result === 1) {
			return TRUE;
		}

		else if($result === 0) {
			throw new AlreadyUsedException();
		}

		else {
			throw new InvalidDataException();
		}
	}
}

class AlreadyUsedException extends Exception {}
class InvalidDataException extends Exception {}

/* End of file FacebookOrder.php */
/* Location: ./application/models/FacebookOrder.php */