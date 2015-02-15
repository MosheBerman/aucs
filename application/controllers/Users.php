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
        $this->load->helper('security');

        $this->load->library('form_validation');
        $this->load->library('user_agent');

    }

    /**
     * TODO: Create a new user.
     */

    public function new_user()
    {
        /**
         * Only organizers can create users while logged in.
         */

        $user = $this->session->get_userdata('user');

        if ($user && $user->is_organizer != 1)
        {
            redirect('/');
        }
        else
        {
            /**
             * Set up the validator.
             */

            $this->form_validation->set_rules('first_name', "first name", 'required');
            $this->form_validation->set_rules('last_name', "last name", 'required');

            $this->form_validation->set_rules(
                'username', 'your email address',
                'required|valid_email',
                array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
                )
            );

            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'password confirmation', 'required|matches[password]');


            if ($this->form_validation->run() == TRUE)
            {

                $first_name = $this->security->xss_clean($this->input->post('first_name'));
                $last_name = $this->security->xss_clean($this->input->post('last-name'));

                $username = $this->security->xss_clean($this->input->post('username'));
                $password = $this->security->xss_clean($this->input->post('password'));

                $this->user->first_name = $first_name;
                $this->user->last_name = $last_name;
                $this->user->email_address = $username;
                $this->user->token_or_password =  password_hash($password, PASSWORD_BCRYPT);

                $this->user->create_user();

                redirect('/');
            }
            else
            {
                $this->load->view('global/header');

                if ($this->session->has_userdata('user')) {

                    /**
                     * TODO: Check permissions and show organizer options if appropriate.
                     */

                    $this->load->view('menu/user_menu');
                } else {
                    $this->load->view('menu/default_menu');
                    $this->load->view('forms/new_user');
                }

                $this->load->view('global/footer');

            }
        }
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
        $this->db->where('token_or_password', password_verify($password, PASSWORD_BCRYPT));

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

        if ($this->session->has_userdata('user')) {
            /**
             * TODO: Check permissions and show organizer options if appropriate.
             */
            $this->load->view('menu/user_menu');
        }
        else
        {
            $this->load->view('menu/default_menu');
            $this->load->view('forms/login');
        }


        $this->load->view('global/footer');
    }
}