<?php

class Prize_package extends CI_Model {

    public $prize_package_id = NULL;
    public $package_name = '';
    public $package_prize_in_dollars = '';

    function __construct()
    {
        parent::__construct();
    }

}