<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prize_packages extends Aucs_controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->library('user_agent');

        $this->load->model('prize_package');


    }

    public function create()
    {

        /**
         * Ensure that the user is logged in and allowed to edit prize packages.
         */

        if (!$this->is_logged_in_as_organizer()) {
            redirect('/');
        }
        else
        {

            if ($this->form_validation->run() == TRUE) {


            }
            else
            {

            }

        }
    }

    public function all()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}