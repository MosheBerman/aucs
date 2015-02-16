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

    <label for="prize_name">Prize Name</label>
    <input id="prize_name" name="prize_name" />

    <label for="prize_description">Prize Name</label>
    <input id="prize_description" name="prize_description" />

    <select id="package"

    <?php

    if ($packages)
    {

        echo ">";
        foreach ($packages as $package) {
            echo "<option value='".$package->prize_package_id."'>".$package->package_name."</option>";
        }
    }
    else
    {
        echo " disabled>";
        echo "<option>No prize packages.</option>";
    }
    ?>

    </select>

    <?php

    echo form_submit('submit_button', 'Add Prize');

    ?>

    </form>
</div>