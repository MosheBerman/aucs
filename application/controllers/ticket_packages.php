<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('Aucs_controller.php');

class Ticket_packages extends Aucs_controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->library('user_agent');

        $this->load->model('user');
        $this->load->model('ticket_package');
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

            /**
             * Validate submission and handle new package.
             */

            $this->form_validation->set_rules('package_cost', 'package cost', 'required|numeric');
            $this->form_validation->set_rules('awarded_value', 'package value', 'required|numeric');

            if($this->form_validation->run() == TRUE) {
                $package_cost = $this->security->xss_clean($this->input->post('package_cost'));
                $package_value = $this->security->xss_clean($this->input->post('awarded_value'));

                $this->ticket_package->actual_amount = $package_cost;
                $this->ticket_package->awarded_amount = $package_value;

                $this->ticket_package->create();

                redirect('ticket_packages/all');
            }
            /**
             * Else, show form and prompt for new entry.
             */
            else
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
                }

                $this->load->view('forms/add_ticket_package');
                $this->load->view('global/footer');
            }
        }
    }

    public function all()
    {
        $user = $this->session->userdata();
        $edit = FALSE;

        if (array_key_exists('user', $user)) {
            $user = $this->session->get_userdata('user');

            $user = $user['user'];

            $edit = $user->is_organizer == '1';

        }

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

        $data['edit'] = $edit;
        $data['packages'] = $this->ticket_package->read()->result();

        $this->load->view('pages/ticket_package_view', $data);
        $this->load->view('global/footer');


    }

}