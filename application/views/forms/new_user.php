<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="form_wrapper">

    <?php

    echo validation_errors();

    echo form_open('users/new_user');

    ?>

    <label for="first_name">First Name</label>
    <input id="first_name" name="first_name" />

    <label for="last_name">Last Name</label>
    <input id="last_name" name="last_name" />

    <label for="username">Email</label>
    <input id="username" name="username" />

    <label for="password" id="password_label">Password</label>
    <input type="password" name="password" value="" />

    <label for="confirm_password" id="confirm_label">Confirm</label>
    <input type="password" name="confirm_password" value="" />

    <input type="submit" name="sign_up_button" value="Sign Up" id="sign_up_button" />

    <?php

    echo form_close();

    ?>

</div>