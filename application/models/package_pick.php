<?php
/**
 * Created by PhpStorm.
 * User: moshe
 * Date: 2/12/15
 * Time: 6:08 PM
 */

class Package_pick extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public $pick_id = NULL;
    public $order_id = '';
    public $prize_id = '';
    public $quantity = '';
}