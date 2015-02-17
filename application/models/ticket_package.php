<?php

class Ticket_package extends CI_Model {

    public $ticket_package_id = NULL;
    public $actual_amount = NULL;
    public $awarded_amount = NULL;

    function __construct()
    {
        parent::__construct();

        $this->load->helper('database');
    }

    public function create()
    {
        $data = array(
            'actual_amount' => $this->actual_amount,
            'awarded_amount' => $this->awarded_amount
        );

        return $this->db->insert('ticket_package', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('ticket_package', array('ticket_package_id'=>$id));
    }
}