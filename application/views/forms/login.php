<div id="form_wrapper">

    <?php echo validation_errors(); ?>

    <?php

    echo form_open('users/log_in');

    echo form_label('Username:', 'username');
    echo form_input('username');

    echo form_label('Password:', 'password', array('id'=>'password_label'));
    echo form_password('password');

    echo form_submit('','Submit');
    echo form_close();

    ?>
</div>

