<?php 
include("includes/data.php");
include("includes/functions.php");
$pageTitle = "Personal Media Library";
$section = null;

include ("includes/header.php"); 

?>


		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
					<?php
                    	foreach($catalog as $id => $item) {
                        	echo get_item_html($id, $item);
                    	}
                	?>								
				</ul>

			</div>

		</div>

<?php include("includes/footer.php"); ?>