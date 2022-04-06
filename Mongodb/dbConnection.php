<?php

//take mongophp driver instance and pass the url string of the database to connect to the database
$conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");

//check  the value select by the user and make request accordinly to the database
if ($_GET['regions'] == 'Entirely') {
    //use phpmongo drive command fucntion to execute the query
    //The aggregation pipeline allows MongoDB to provide native aggregation capabilities
    // that corresponds to many common data aggregation operations in SQL. like sume ,avg etc
    $mongoCommand = new MongoDB\Driver\Command(
        [
            'aggregate' => 'indebted',

            'pipeline' => [
                ['$group' => [
                    '_id' => ['year' => '$year', 'gender' => '$gender', 'regions' => '$regions'],
                    'total' => [
                        '$sum' => '$numberOfPeople'
                    ]
                ]]
            ],
            'explain' => false
        ]
    );

    $result =  $conn->executeCommand('db_comp', $mongoCommand);
} 

$result = $result->toArray();

print json_encode($result);
