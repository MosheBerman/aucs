<?php

class Prize extends CI_Model {

    public $prize_id = NULL;
    public $prize_name = '';
    public $prize_description = '';
    public $sponsor_id = '';
    public $package_id = '';

    function __construct()
    {
        parent::__construct();
    }

}