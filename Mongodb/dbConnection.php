<?php
 //take mongophp driver instance and pass the url string of the database to connect to the database
$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
var_dump($connection);
?>
