<?php

class Address extends CI_Model {

    protected $address_id = NULL;
    public $street_number = '';
    public $street_name = '';
    public $apartment_or_suite = '';
    public $city = '';
    public $state = '';
    public $ZIP = '';

    function __construct()
    {
        parent::__construct();
    }

    public function create(){
        
    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}