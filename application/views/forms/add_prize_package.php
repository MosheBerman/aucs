<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="form_wrapper">

    <?php echo validation_errors();

    if(isset($message)) {
        echo $message;
    }

    echo form_open('prize_packages/create');

    ?>

    <label for="package_number">Package Number <p class="field_description">What is the package number?</p></label>
    <input id="package_number" name="package_number" />


    <label for="package_name">Package Name <p class="field_description">What is the package called?</p></label>
    <input id="package_name" name="package_name" />

    <label for="package_price">Package Price<p class="field_description">How much, in dollars, does the package cost?</p></label>
    <input id="package_price" name="package_price" />

    <?php

    echo form_submit('submit_button', 'Add Prize Package');

    ?>

    </form>
</div>