<?php 

/**
 *	The Ticket_Package model defines what a ticket package should look like.
 */

class Ticket_package extends CI_Model {

	var $ticket_package_id = NULL;
	var $actual_amount = '';
	var $awarded_amount = '';

	function __construct()
	{
		parent::__construct();
	}

	function get_ticket_packages()
	{
		$query = $this->db->get('TICKET_PACKAGE');
		return $query->result();
	}

	function create() {
		$this->actual_amount = $this->input->post('actual_amount');
		$this->awarded_amount = $this->input->post('awarded_amount');

		$result = $this->db->insert('TICKET_PACKAGE', $this)->result();
		return $result;
	}

	function update() {
		
	}
}

/* End of file ticket_package.php */
/* Location: .application/models/tickets/ticket_package.php */