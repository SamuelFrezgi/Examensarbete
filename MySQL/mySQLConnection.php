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

if (isset($Indebted_regions)) {
    // will take specific region to get  data from the database
    $Indebted_regions = $_GET['regions']; 

    //check for the region that user select from the browser to get data accordingly
    if ($Indebted_regions == 'ALL') {

        $sql = sprintf("SELECT year,gender,regions, sum(numberOfPeople) as total FROM indebted group by year, gender,regions;");

        // print_r($sql);
    } else {
        $sql = sprintf("SELECT year,gender,regions, sum(numberOfPeople) as total FROM indebted where regions ='" . $Indebted_regions . "' group by year, gender,regions;");
    }
    $result = $mysqli->query($sql);

    //check if we get the data or not
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //just console the data in json format
        echo json_encode($result);
      
      
    } else {
        echo "These was no data";
    }
}
// close the connection from the database
$mysqli->close();
