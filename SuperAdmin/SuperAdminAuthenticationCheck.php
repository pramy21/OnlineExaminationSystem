<?php       
    session_start();
    include("../dataAccess/dbcon.php");
    $connection = GetConnection();
    if($connection != null)
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // username and password sent from form             
            $superAdminUserName = $_POST['uname'];
            $mypassword = $_POST['pwd'];       
            $sqlCommand = "CALL SuperAdminAuthentication('" . $superAdminUserName . "','" . $mypassword ."')";
            $result = mysqli_query($connection, $sqlCommand) or die("Query fail: " . mysqli_error($connection));       
            //loop the result set
            $authentication = false;
            while ($row = mysqli_fetch_array($result))
            {   
                if($row["AUTHENTICATION"] == "1")
                {
                    $authentication = true;
                }
            }            
            if($authentication) { 
                //session_register("SuperAdminUserName");
                $_SESSION['Super_Admin_User_Name'] = $superAdminUserName;               
               header("location: SuperAdminDashboard.php");
            } else {
               $error = "Your Login Name or Password is invalid";
               header("location: ../Error.php");
            }
        } 
    }   
?>