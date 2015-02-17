<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="form_wrapper">

    <?php echo validation_errors();

    if(isset($message)) {
        echo $message;
    }

    echo form_open('ticket_packages/create');

    ?>

    <label for="package_cost">Cost <p class="field_description">How much are supporters going to pay for this ticket package?</p></label>
    <input id="package_cost" name="package_cost" />


    <label for="awarded_value">Value <p class="field_description">How much money in tickets is the package worth?</p></label>
    <input id="awarded_value" name="awarded_value" />


    <?php

    echo form_submit('submit_button', 'Add Ticket Package');

    ?>

    </form>
</div>