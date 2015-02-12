<?php

class User_order extends CI_Model{

    public $order_id = NULL;
    public $created = NULL;
    public $user_id = NULL;
    public $ticket_package_id = NULL;

    function __construct()
    {
        parent::__construct();
    }

}