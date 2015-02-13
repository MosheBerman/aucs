<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('user');

        $this->load->library('form_validation');


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

        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        // Prep the query
        $this->db->where('email_address', $username);
        $this->db->where('token_or_password', $password);

        $sql = 'SELECT * from user where email_address = ? AND token_or_password = ?';
        $query = $this->db->query($sql, array($username, $password));



        // Run the query
        if($query->num_rows() > 0)
        {
            $result = $query->result();
            $user = $result[0];

            $this->session->set_userdata('user', $user);

            redirect('/');
        }
        else {
            redirect('users/portal');
        }
    }

    /**
     * TODO: Log the user out and clear the session.
     */

    public function log_out()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('/');
    }

    /**
     *  Present a login form.
     */

    public function portal()
    {
        $this->load->view('global/header');
        $this->load->view('menu/default_menu');
        $this->load->view('forms/login');
        $this->load->view('global/footer');
    }
}