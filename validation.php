<?php

session_start();
    
//login into database
$con = mysqli_connect('localhost','root','root');

//select your database
mysqli_select_db($con,'amtrak');

//create variable to store value
$email = $_POST['email'];
$password = $_POST['password'];

//select data from table
$s = "SELECT name FROM USER WHERE email = '$email' and password = '$password' LIMIT 1";

//store result in a variable
$result = mysqli_query($con, $s);

//count the same email stored in database
$row = mysqli_fetch_row($result);

    //check the duplicate email
    if (Count($row) == 1){		 
		 $_SESSION['name'] = $row[0];
         header("location:home.php");
    } else {
        $_SESSION['message'] = 'User does not exist. Please register first.';
        header("location:login.php");
       
    }
?>