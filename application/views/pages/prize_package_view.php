<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<ul>

<?php

    if(isset($packages))
    {
        foreach($packages as $package)
        {
            echo "<li>";
            echo "($".$package->package_price_in_dollars.") Package ".$package->package_number." ".$package->package_name;
            echo "</li>";
        }
    }
?>

</ul>

<?php

if(isset($edit))
{
    if($edit == TRUE)
    {
        ?>

        <div class="center full_width" style="padding-top: 10px">
            <a href="<?php echo base_url('index.php/prize_packages/create') ?>" class="gray_button">Add a Prize Package</a>
        </div>

    <?php

    }
}
?>
