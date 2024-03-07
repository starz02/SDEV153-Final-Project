<?php
if($_POST["message"]) {
mail("cruschmeier@ivytech.edu", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>

