<?php
/**
 * Created by PhpStorm.
 * User: Moshe
 * Date: 2/18/15
 * Time: 8:13 PM
 */

class Aucs_controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();



    }

    public function is_logged_in_as_organizer() {


        $user = $this->session->userdata();

        if (array_key_exists('user', $user)) {
            $user = $this->session->get_userdata('user');

            $user = $user['user'];
        }

        return $user && $user->is_organizer == '1';
    }


    public function current_user() {
        $user = $this->session->userdata();

        if (array_key_exists('user', $user)) {
            $user = $this->session->get_userdata('user');

            $user = $user['user'];
        }

        return $user;
    }
}