<?php
    $con = mysqli_connect("localhost", "root", "", "mStore1", "3308") or die(mysqli_error($con));
    
    if(isset($_GET['login'])){
        $emailL = mysqli_real_escape_string($con, $_GET['myEmail']);
        $passwordL = mysqli_real_escape_string($con, $_GET['myPassword']);
        $flag = '';
        
        $queryL = "SELECT * FROM mStore1.users WHERE (`email` = '$emailL') && (`password` = '$passwordL')";
        $runL = mysqli_query($con, $queryL) or die(mysqli_error($con));
        
        if($runL){
            if(mysqli_num_rows($runL) == 0){
                $flag = 'signup';
                $message = 'This user is not registered with us.Register to continue.';
            }
            elseif (mysqli_num_rows($runL) == 1) {
                $flag = 'login';
            }
            else{
                $message = 'Unauthorised Login.';
            }
        }
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
       
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse-navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         
        
        <div class="container" id="panel">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>LOGIN</h1>
                </div>
                
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase!!!</p>
                    <form method="GET" action="">
                        <div class="form-group">
                            <label for="myEmail">Email Address:</label>
                            <input type="email" class="form-control" name="myEmail" placeholder="Enter E-Mail Id">
                        </div>
                        
                        <div class="form-group">
                            <label for="myPassword">Password:</label>
                            <input type="password" class="form-control" name="myPassword" placeholder="Enter Password">
                        </div>
                        
                        <div>
                            <input type="submit" name="login" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                
                <div class="panel-footer">
                    Don't have an account? <a href="signup.php">Register</a>
                    <?php
                    if (isset($runL)){
                        if ($flag == 'signup'){
                            echo '<h5 style="color: red">'.$message.'</h5>';
                        }
                        elseif ($flag == 'login') {
                            echo "<h5 style='color: green'><a href='products.php'>Click</a> to continue.</h5>";
                        }
                        elseif ($flag == '')
                            echo $message;
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <div class="container">
            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </div>
    </body>
</html>

