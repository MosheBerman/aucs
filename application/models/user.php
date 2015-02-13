<?php

class User extends CI_Model{

    public $user_id = NULL;
    public $created = NULL;
    public $email_address = NULL;
    public $first_name = NULL;
    public $last_name = NULL;
    public $token_or_password = NULL;
    public $phone_number_id = NULL;
    public $address_id = NULL;
    public $is_organizer = 0;

    function __construct()
    {
        parent::__construct();
    }
}