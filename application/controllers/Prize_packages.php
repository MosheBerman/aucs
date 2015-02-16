<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prize_packages extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('database');
    }

    public function create()
    {

        /**
         * TODO: Validate & create if the post data exists.
         */

        /**
         * Else, show form and prompt for new entry.
         */
    } 

}