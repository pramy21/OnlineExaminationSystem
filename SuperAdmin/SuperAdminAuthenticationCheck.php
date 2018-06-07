<?php       
    session_start();
    include("../dataAccess/dbcon.php");
    $connection = GetConnection();
    if($connection != null)
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // username and password sent from form             
            $superAdminUserName = mysqli_real_escape_string($db,$_POST['uname']);
            $mypassword = mysqli_real_escape_string($db,$_POST['pwd']);             
            // $result = mysqli_query($connection,"CALL SuperAdminAuthentication") or die("Query fail: " . mysqli_error());       
            // //loop the result set
            // while ($row = mysqli_fetch_array($result))
            // {   
            //     echo $row[0] . " - " . + $row[1]; 
            // }
            
            if(true) { //if($count == 1) {
            //    session_register("SuperAdminUserName");
            //    $_SESSION['Super_Admin_User_Name'] = $superAdminUserName;               
               header("location: SuperAdminDashboard.php");
            } else {
               $error = "Your Login Name or Password is invalid";
               header("location: ../Error.php");
            }
        } 
    }   
?>