<?php 
    $con = mysqli_connect("localhost", "root", "", "mStore1", "3308")or die(mysqli_error($con));
    $flagC = 1;
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="settings.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="products.php" class="navbar-brand">Lifestyle Store</a>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse-navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" id="myNavbar">
                        <li>
                            <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                        </li>
                        
                        <li>
                            <a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a>
                        </li>
                        
                        <li>
                            <a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container" id="formo">
            <h1>Change Password</h1>
            
            <form>
                <div class="form-group">
                    <input type="text" name="old" placeholder="Enter Old Password" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="text" name="new" placeholder="Enter New Password" class="form-control">
                </div>  
                
                <div class="form-group">
                    <input type="text" name="retype" placeholder="Retype New Password" class="form-control">
                </div>  
                
                <div class="form-group">
                    <input type="submit" name="change" value="Change" class="btn btn-primary">
                </div>
            </form>
            
            <?php 
                if(isset($_GET['change'])){
                    $old = mysqli_real_escape_string($con, $_GET['old']);
                    if ($old == ''){
                        $flagC = 0;
                        echo "<h5 style='color: red'>Please enter Old password.</h5>";
                    }
                    $new = mysqli_real_escape_string($con, $_GET['new']);
                    if ($new == ''){
                        $flagC = 0;
                        echo "<h5 style='color: red'>Please enter New password.</h5>";
                    }
                    $retype = mysqli_real_escape_string($con, $_GET['retype']);
                    if ($retype == ''){
                        $flagC = 0;
                        echo "<h5 style='color: red'>Please Re-enter New password.</h5>";
                    }

                    if ($flagC){
                        $queryC = "SELECT email, password FROM mStore1.users WHERE `password` = '$old' ";
                        $runC = mysqli_query($con, $queryC) or die(mysqli_error($con));
                        if (mysqli_num_rows($runC) == 1){
                            $data = mysqli_fetch_array($runC);
                            $oldEmail = $data['email'];
                            $queryCC = "UPDATE mStore1.users SET `password` = '$new' WHERE `email` = '$oldEmail' ";
                            $runCC = mysqli_query($con, $queryCC) or die(mysqli_error($con));
                            if ($runCC){
                                echo "<h5 style='color: green'>Password changed successfully!!</h5>";
                            }
                        }
                        
                        if (mysqli_num_rows($runC) == 0){
                            echo "<h5 style='color: red'>Enter valid old password!!</h5>";
                        }
                    }
                }
            ?>
        </div>
        
        <div id="footer">
            <div class="container text-center">
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
            </div>
        </div>
    </body>
</html>
