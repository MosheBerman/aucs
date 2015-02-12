<?php

class Ticket_package extends CI_Model {

    public $ticket_package_id = NULL;
    public $actual_amount = NULL;
    public $awarded_amount = NULL;

    function __construct()
    {
        parent::__construct();
    }
}