<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table>
    <tr>
        <td>
            You Donate:
        </td>
        <td>
            You Get:
        </td>

        <?php

            if(isset($packages))
            {

                foreach ($packages as $package) {

                    echo "<tr><td>$".$package->actual_amount."</td><td>$".$package->awarded_amount."</td></tr>";

                }

            }

        ?>

    </tr>
</table>

<?php


if(isset($edit))
{
    if($edit == TRUE)
    {
        ?>

        <div class="center full_width" style="padding-top: 10px">
            <a href="<?php echo base_url('index.php/ticket_packages/create') ?>" class="gray_button">Add a Ticket Package</a>
        </div>

    <?php

    }
}
?>

