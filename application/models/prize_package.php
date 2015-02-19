<?php

class Prize_package extends CI_Model {

    public $prize_package_id = NULL;
    public $package_name = NULL;
    public $package_price_in_dollars = NULL;
    public $package_number = NULL;

    function __construct()
    {
        parent::__construct();
    }

    public function create() {

        $data = array(
            'package_name' => $this->package_name,
            'package_price_in_dollars ' => $this->package_price_in_dollars
            );

        return $this->db->insert('prize_package', $data);
    }

    public function read() {
        return $this->db->get('prize_package')->result();
    }

//    public function update($id)
//    {
//
//    }

    public function delete($id)
    {
        return $this->db->delete('prize_package', array('prize_package_id' => $id));
    }
}