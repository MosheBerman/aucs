<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    /**
     * TODO: Create a new user.
     */

    public function new_user()
    {

    }

    /**
     *  TODO: Allow the user to edit their profile.
     */

    public function edit()
    {

    }

    /**
     *  TODO: Log the user in and update the session?
     */

    public function log_in()
    {

    }

    /**
     * TODO: Log the user out and clear the session.
     */

    public function log_out()
    {
//        $this->session->
    }

    /**
     *  Present a login form.
     */

    public function portal()
    {
        $this->load->view('global/header');
    }
}