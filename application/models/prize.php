<?php

class Prize extends CI_Model {

    public $prize_id = NULL;
    public $prize_name = NULL;
    public $prize_description = NULL;
    public $sponsor_name = NULL;
    public $package_id = NULL;

    function __construct()
    {
        parent::__construct();
    }

    public function create_prize() {

        $data = array(
            'prize_name' => $this->prize_name,
            'prize_description' => $this->prize_description,
            'sponsor_name' => $this->sponsor_name,
            'package_id' =>
        );

        $this->db->insert('prize', $data);

    }

}