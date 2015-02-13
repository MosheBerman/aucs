<?php

echo form_open('users/log_in');
echo form_input('username');
echo form_password('password');
echo form_submit();
echo form_close();
