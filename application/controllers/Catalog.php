<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
    }

    /**
     *  Show the catalog entries.
     */

    public function view()
    {
        /**
         * TODO: Load the data from the database.
         */

        /**
         * Generate the views.
         */

        $this->load->view('global_header');
        $this->load->view('menu/default_menu');

        $this->load->view('global_footer');
    }

}