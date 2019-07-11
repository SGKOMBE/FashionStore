<?php 
    $con = mysqli_connect("localhost", "root", "", "mStore1", "3308") or die(mysqli_error($con));
    $flag =1;
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="signup.css">
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
        
        <div class="container" id="formo">
            <h1>SIGN UP</h1>
            
            <form method="GET" action="">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                
                 <div class="form-group">
                     <input type="text" name="contact" placeholder="Contact" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input type="text" name="city" placeholder="City" class="form-control">
                </div>
                
                 <div class="form-group">
                    <input type="text" name="address" placeholder="Address" class="form-control">
                </div>
                
                <div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
           
            <?php
                if(isset($_GET['submit'])){

                    $name = mysqli_real_escape_string($con, $_GET['name']);
                    if($name == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>Name cannot be Empty!!</h5>";
                    }    
                    $email = mysqli_real_escape_string($con, $_GET['email']);
                    if($email == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>Emai Id cannot be Empty!!</h5>";
                    }
                    $password = mysqli_real_escape_string($con, $_GET['password']);
                    if($password == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>Password cannot be Empty!!</h5>";
                    }
                    $contact = mysqli_real_escape_string($con, $_GET['contact']);
                    if($contact == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>Contact cannot be Empty!!</h5>";
                    }
                    $city = mysqli_real_escape_string($con, $_GET['city']);
                    if($city == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>City cannot be Empty!!</h5>";
                    }
                    $address = mysqli_real_escape_string($con, $_GET['address']);
                    if($address == ''){
                        $flag = 0;
                        echo "<h5 style='color: red'>Address cannot be Empty!!</h5>";
                    }

                    if ($flag){
                        $query = "INSERT INTO mStore1.users(`name`, `email`, `password`, `contact`, `address`, `city`) VALUES ('$name', '$email', '$password', '$contact', '$address', '$city')";
                        $run = mysqli_query($con, $query) or die(mysqli_error($con));
                    }
                }
            
                if(isset($run)){
                    echo "<h5>User Registered Successfully!! <a href='login.php'>Login</a> to continue Shopping!!</h5>";
                    }
            ?>
        </div>
        
        <div id="footer">
            <div class="container">
            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </div>
    </body>
</html>


