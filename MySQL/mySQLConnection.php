<?php

//Declare the database info.
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "debted";

//Create the connection.
$mysqli = new mysqli($serverName, $userName, $password, $databaseName);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
