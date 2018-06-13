<?php


function GetConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "onlineexaminationsystem";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return null;
    }
    // echo "Connected successfully";
    return $conn; 
}
?> 