<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="form_wrapper">

    <?php

    echo validation_errors();

    echo form_open('users/log_in');

    echo form_label('Email:', 'username');
    echo form_input('username');

    echo form_label('Password:', 'password', array('id'=>'password_label'));
    echo form_password('password');

    echo form_label('Confirm:', 'confirm_password', array('id'=>'confirm_label'));
    echo form_password('confirm_password');

    echo form_submit('sign_up_button','Sign Up', 'id="sign_up_button"');
    echo form_close();

    ?>

</div>