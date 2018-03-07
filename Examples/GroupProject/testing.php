<?php

include 'DBConnection.php';

// Prepare the connection and connect
$host = "localhost";
$dbname = "Bank";
$username = "econ909";
$password = "";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Compose the SQL statement
$sql = " SELECT * FROM bank WHERE name = :name ";

// Prepare the statement
$stmt = $dbConn -> prepare ($sql);

// Execute the statement, passing in array of parameters
$stmt -> execute (  array ( ':name' => 'BOA')  );

// Process the results
while ($row = $stmt -> fetch())  {
    echo  $row['bank'] . ", " . $row['location'];
}
?>