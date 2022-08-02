<?php
  if(isset($_POST['submit'])){
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = "SELECT * from users where username='$username' and password ='$password'";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){
      session_start();
      $_SESSION['auth']='true';
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
      // var_dump($_SESSION['start']);
      // var_dump($_SESSION['expire']);
      $row = mysqli_fetch_array($result);
      // header('location: ./index.php?id='.$row['id'].'&uno='.$row['uniqueNo']);
      header('location: ./index.php?username='.$row['username'].'&uno='.$row['uniqueNo']);
      // echo "<script>alert('TRUE AUTH')</script>";

      // echo "Right";
    }
    else{
        echo "<script>alert('Wrong username or password')</script>";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <!-- <body class="fixed-left" style="background-image:url(assets/images/background.jpg)"> -->
    <body class="fixed-left" style="background: -webkit-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -o-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -moz-linear-gradient(-135deg, #6862d5, #dd2476);
  background: linear-gradient(-135deg, #1C3879, #EB4747);">
        
        <!-- Begin page -->
        <!--<div class="accountbg"></div>-->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0">
                        <a href="./login.php" class="logo logo-admin"><img src="https://testbook.com/assets/img/index/home-banner__illust.svg" height="100" alt="logo"></a>
                    </h3>

                    <h6 class="text-center">Sign In</h6>

                    <div class="p-3">
                        
                        <form class="form-horizontal" method="POST">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" name="username" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" id="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" id="submit" name="submit" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password ?</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="../register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account ?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>