<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="form_wrapper">

    <?php echo validation_errors();

    if(isset($message)) {
        echo $message;
    }

    echo form_open('prizes/add');

    ?>

    <label for="package_cost">Cost</label>
    <input id="package_cost" name="package_cost" />
    <p>How much are supporters going to pay for this ticket package?</p>

    <label for="awarded_value">Value</label>
    <input id="awarded_value" name="awarded_value" />
    <p>How much money in tickets is the package worth?</p>

    <?php

    echo form_submit('submit_button', 'Add Ticket Package');

    ?>

    </form>
</div>