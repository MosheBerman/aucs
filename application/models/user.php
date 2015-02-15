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
    public $phone = NULL;

    function __construct()
    {
        parent::__construct();
    }

    public function create_user() {

        $data = array(
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_address' => $this->email_address,
            'phone_number' => $this->phone,
            'token_or_password' => $this->token_or_password
    );


        $query = $this->db->query('SELECT * FROM USER WHERE email_address = ?', array($this->email_address));

        if ($query->num_rows() == 0) {
            return $this->db->insert('user', $data);
        }
        else
        {
            return false;
        }
    }

}