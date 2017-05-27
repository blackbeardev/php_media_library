<?php 

include("includes/data.php");

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
        <h1><?php echo $pageTitle; ?></h1>
        
            <ul class="items">
                <?php
                    foreach($catalog as $item) {
                        echo "<li><a href='#'><img src='" 
                        .$item["img"] ."' alt='" 
                        .$item["title"] ."'/>"
                        ."<p>View details</p>"
                        ."</a></li>";
                    }
                ?>
            </ul>
        
    </div>
</div>



<?php include("includes/footer.php"); ?>