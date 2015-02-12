<?php

class Phone extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public $number_id = NULL;
    public $country_code = '';
    public $area_code = '';
    public $digits = '';
    public $extension = '';
}