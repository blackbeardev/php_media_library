<?php 
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include ("includes/header.php"); 

?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>If you&rsquo;d like to add something to the library, send me a message!</p>
    </div>
    <form action="process.php" method="post">
        <table>
            <tr>
                <th><label for="name">Name</label></th>
                <td><input type="text" name="name" id="name" /></td>
            </tr>
            <tr>
                <th><label for="email">Email</label></th>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
                <th><label for="details">Suggest Item</label></th>
                <td><textarea name="details" id="details"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Send">
    </form>
    
</div>


<?php include("includes/footer.php"); ?>