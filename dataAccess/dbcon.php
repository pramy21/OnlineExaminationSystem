<?php


function GetConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return null;
    }
    // echo "Connected successfully";
    return $conn; 
}
?> 