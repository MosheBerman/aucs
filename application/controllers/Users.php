<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    function __construct() {
        parent::__construct();

        $this->load->helper('url');
    }

    /**
     *  TODO: Log the user in and update the session?
     */

    public function log_in(){

    }

}