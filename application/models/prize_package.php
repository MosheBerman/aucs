<?php

class Prize_package extends CI_Model {

    public $prize_package_id = NULL;
    public $package_name = '';
    public $package_prize_in_dollars = '';

    function __construct()
    {
        parent::__construct();
    }

    public function get_packages_and_prizes(){

        $prize_packages= $this->db->get('PRIZE_PACKAGE')->result();
//        $prizes = $this->db->get('PRIZE')->result();

//        var_dump($prize_packages);

        return $prize_packages;
    }

}