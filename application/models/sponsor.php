<?php

class Sponsor extends CI_Model{

    public $sponsor_id = NULL;
    public $sponsor_name = '';
    public $website_url = '';
    public $phone_number = '';

    function __construct()
    {
        parent::__construct();
    }
}