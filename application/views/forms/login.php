<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="form_wrapper">

    <?php echo validation_errors();

    $setLogInAction = 'document.getElementById("login_form").action = "'.base_url().'index.php/users/log_in";';
    $setNewUserAction = 'document.getElementById("login_form").action = "'.base_url().'./index.php/users/new_user";';

    echo form_open('users/log_in', array('id' => 'login_form'));

    echo form_label('Email', 'username');
    echo form_input('username');

    echo form_label('Password', 'password', array('id'=>'password_label'));
    echo form_password('password');

    echo form_submit('submit_button', 'Log In', "onclick={$setLogInAction}");

    ?>

    <a href="<?php echo base_url() ?>index.php/users/new_user" id="sign_up_form_button">Sign Up</a>

    <?php

    echo form_close();

    ?>
</div>

