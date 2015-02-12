


	<h1>Ticket Packages</h1>
	<div id="body">
		
		<?php 

			/**
			*	TODO: Show ticket packages
			*/

			//	If there are results - process them.
			if (count($queries) > 0)
			{

				echo "<ul id=\"ticket-package-list\">";

				foreach ($queries as $row) {
					
					$actual_amount = $row->actual_amount;
					$awarded_amount = $row->awarded_amount;

					echo "<li>Contribute <strong>$".$actual_amount."</strong> and get <strong>$".$awarded_amount."</strong> in tickets.</li>";
				}

				echo "</ul>";
			}
			else 
			{
				echo '<h2 class="warning">There are no ticket packages.</h2>';
			}
		?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>