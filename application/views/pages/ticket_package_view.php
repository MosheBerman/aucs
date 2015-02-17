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



            ?>

        </tr>
    </table>

<?php

if ($user->is_organizer == 1) {

    ?>
<a href="<?php echo base_url() ?>/index.php/ticket_packages/create">Add a Ticket Package</a>

<?php

}

