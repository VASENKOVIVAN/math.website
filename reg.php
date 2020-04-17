<?php
include("dbconnect.php");


$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$mysql = new mysqli('math.website', 'root', '', 'testbd');
$mysql->query("INSERT INTO `response` (`name`, `email`, `text`) VALUES('$name', '$email', '$text')");
$mysql->close();
 echo "<h1>Спасибо за отзыв!</h1>";
?>
