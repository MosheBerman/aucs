<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('Aucs_controller.php');

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

            $this->form_validation->set_rules('package_name', 'package name', 'required');
            $this->form_validation->set_rules('package_price', 'package value', 'required|numeric');
            $this->form_validation->set_rules('package_number', 'package value', 'required|numeric');

            if ($this->form_validation->run() == TRUE) {

                $package_name = $this->security->xss_clean($this->input->post('package_name'));
                $package_price_in_dollars = $this->security->xss_clean($this->input->post('package_price'));
                $package_number = $this->security->xss_clean($this->input->post('package_number'));

                $this->prize_package->package_name = $package_name;
                $this->prize_package->package_price_in_dollars = $package_price_in_dollars;
                $this->prize_package->package_number = $package_number;

                $this->prize_package->create();

                redirect('catalog/all');
            }
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

                $this->load->view('forms/add_prize_package');
                $this->load->view('global/footer');
            }
        }
    }

    public function all()
    {

        $data['edit'] = $this->is_logged_in_as_organizer();
        $data['user'] = $this->current_user();
        $data['packages'] = $this->prize_package->read();

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



        $this->load->view('pages/prize_package_view', $data);
        $this->load->view('global/footer');
    }
}