<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="menu">
    <ul>
        <li>
            <a href="<?php echo site_url('welcome');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('catalog/all');?>">Catalog</a>
        </li>
        <li>
            <a href="<?php echo site_url('welcome/tickets');?>">Tickets</a>
        </li>
        <li>
            <a href="<?php echo site_url('users/portal');?>">Log In</a>
        </li>
        <li>
            <a href="<?php echo site_url('welcome/About');?>">About</a>
        </li>
    </ul>
</div>