<?php
/**
 * Created by PhpStorm.
 * User: moshe
 * Date: 2/12/15
 * Time: 4:40 PM
 */

class Address extends CI_Model {

    protected $address_id = NULL;
    public $street_number = '';
    public $street_name = '';
    public $apartment_or_suite = '';
    public $city = '';
    public $state = '';
    public $ZIP = '';

    public function (){
        
    }
}