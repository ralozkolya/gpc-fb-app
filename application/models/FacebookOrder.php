<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacebookOrder extends CI_Model {

	private $table = 'FacebookOrders';

	public function exists($ticket_id, $card_id) {
		return $this->db->get_where($this->table, [
			'TicketID' => $ticket_id,
			'CardID' => $card_id,
		])->num_rows();
	}

	public function add($ticket_id, $card_id, $phone) {
		return $this->db->insert($this->table, [
			'TicketID' => $ticket_id,
			'CardID' => $card_id,
			'Phone' => $phone,
			'TransDate' => date('Y-m-d H:i:s'),
		]);
	}

}

/* End of file FacebookOrder.php */
/* Location: ./application/models/FacebookOrder.php */