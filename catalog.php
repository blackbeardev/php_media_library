<?php 
$catalog = array();
//Tells php to add one new element to the code, using whatever index number comes next.
$catalog[101] = "Design Patterns"; 
$catalog[201] = "Forrest Gump";
$catalog[301] = "Beethoven";
$catalog[102] = "Clean Code";

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
        
            <ul>
                <?php
                    foreach($catalog as $item) {
                        echo "<li>" . $item . "</li>";
                    }
                ?>
            </ul>
        
    </div>
</div>



<?php include("includes/footer.php"); ?>