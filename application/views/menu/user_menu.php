<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="menu">
    <ul>
        <li>
            <a href="<?php echo site_url('welcome');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('prize_packages/all');?>">Catalog</a>
        </li>
        <li>
            <a href="<?php echo site_url('ticket_packages/all');?>">Tickets</a>
        </li>
        <li>
            <a href="<?php echo site_url('users/log_out');?>">Log Out</a>
        </li>
        <li>
            <a href="<?php echo site_url('welcome/about');?>">About</a>
        </li>
    </ul>
</div>