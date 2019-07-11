<?php 
    
    $con = mysqli_connect("localhost", "root", "", "mStore1", "3308") or die(mysqli_error($con));

    $name = mysqli_real_escape_string($con, $_GET['name']);
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $password = mysqli_real_escape_string($con, $_GET['password']);
    $contact = mysqli_real_escape_string($con, $_GET['contact']);
    $city = mysqli_real_escape_string($con, $_GET['city']);
    $address = mysqli_real_escape_string($con, $_GET['address']);
    
    $query = "INSERT INTO mStore1.users(`name`, `email`, `password`, `contact`, `address`, `city`) VALUES ('$name', '$email', '$password', '$contact', '$address', '$city')";
    $run = mysqli_query($con, $query) or die(mysqli_error($con));
    
    if(isset($run)){
        echo 'User Registered Successfully!!';
    }
?>
