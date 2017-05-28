<?php 

include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Full Catalog";

//Set the active menu choice
$section = null;

//Check to see which category has been clicked on and set the page title to be the cat.
if(isset($_GET["cat"])) {
    if($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    } else if($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}





include("includes/header.php"); 

?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php
            if($section != null) {
                echo "<a href='catalog.php'>Full Catalog</a> &gt;";
            }
        echo $pageTitle; ?></h1>
        
            <ul class="items">
                <?php
                    $categories = array_category($catalog, $section);
					
                    	foreach($categories as $id) {
                        	echo get_item_html($id, $catalog[$id]);
                    	}
                ?>
            </ul>
        
    </div>
</div>



<?php include("includes/footer.php"); ?>