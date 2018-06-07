<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello, world!</title>


  <!--Line Icon Include -->
  
  <link rel="stylesheet" type="text/css" href="../assets/line-awesome/css/line-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="../assets/bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body class="login-bg">
    <div class="login_wrap">
        <form action="SuperAdminAuthenticationCheck.php" method="post">
            <div class="imgcontainer text-center">
                <img src="assets/images/logo.png" alt="Avatar" class="img-fluid">
            </div>

            <div class="container">
                <div class="bottom-15">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
                </div>
                <div class="bottom-15">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pWd" class="form-control" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-default btn-primary custom-btn btn-min">Login</button>
                </div>
            </div>
        </form>
    </div>
<!-- JavaScript Library Include -->

<script type="text/javascript" src="js/jQuery.min.js"></script>

<script type="text/javascript" src="assets/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>