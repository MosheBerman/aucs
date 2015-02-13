<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    /**
     *  Show the catalog entries.
     */

    public function all()
    {
        /**
         * TODO: Load the data from the database.
         */

        $this->load->model('prize_package');
        $this->load->model('prize');


        /**
         * Generate the views.
         */

        $this->load->view('global/header');

        if ($this->session->has_userdata('user')) {
            /**
             * TODO: Check permissions and show organizer options if appropriate.
             */
            $this->load->view('menu/user_menu');
        }
        else
        {
            $this->load->view('menu/default_menu');
        }

        $this->load->view('global/footer');

        $this->prize_package->get_packages_and_prizes();
    }
    
    /**
     *  Shows the given package.
     *
     * @param Integer $prize_package_id The ID of the package to display.
     */

    public function package($prize_package_id = NULL){
        if($prize_package_id == NULL)
        {
            $this->all();
        }
        else
        {
            /**
             * TODO: Load the specific prize package.
             */
        }
    }
}