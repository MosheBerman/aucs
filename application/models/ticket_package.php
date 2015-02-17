<?php

class Ticket_package extends CI_Model {

    public $ticket_package_id = NULL;
    public $actual_amount = NULL;
    public $awarded_amount = NULL;

    function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $data = array(
            'actual_amount' => $this->actual_amount,
            'awarded_amount' => $this->awarded_amount
        );

        return $this->db->insert('ticket_package', $data);
    }

    public function read()
    {
        return $this->db->get('ticket_package');
    }

    public function delete($id)
    {
        return $this->db->delete('ticket_package', array('ticket_package_id'=>$id));
    }
}

/*
 * JLIC Ticket Package amounts
 *
 * 75 115
 * 100 160
 * 150 250
 * 200 340
 * 250 440
 * 300 540
 * 350 650
 * 400 760
 * 450 875
 * 500 1000
 *
 */