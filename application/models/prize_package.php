<?php

class Prize_package extends CI_Model {

    public $prize_package_id = NULL;
    public $package_name = '';
    public $package_price_in_dollars = '';

    function __construct()
    {
        parent::__construct();
    }

    public function create_package() {

        $data = array(
            'package_name' => $this->package_name,
            'package_price_in_dollars ' => $this->package_price_in_dollars
            );
    }

    public function get_packages() {
        return $this->db->get('PRIZE_PACKAGES');
    }

}