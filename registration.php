<?php

    session_start();
    
    //login into database
    $con = mysqli_connect('localhost','root','root');
	
	createDatabase();
	
    //select your database
    mysqli_select_db($con,'amtrak');
	
	createTables();
    //create variable to store value
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    if(empty($name) || empty($email) || empty($password))
    {
		$_SESSION['message'] = 'Please fill all the fields!!';
		$_SESSION['msg_type'] = 'RegDetails';
		header("location:login.php");
    }
	else
	{

		//select data from table
		$s = "SELECT * FROM USER WHERE email = '$email'";

		//store result in a variable
		$result = mysqli_query($con, $s);

		//count the same email stored in database
		$num = mysqli_num_rows($result);

		//check the duplicate email
		if ($num == 1){
			echo "User already exist";//show alert message
		} else {
			//insert the data
			$reg = "INSERT INTO user (name, email, password) VALUES ('$name','$email','$password')";
			mysqli_query($con,$reg);
			
			$_SESSION['message'] = "User has been registered!";
			$_SESSION['msg_type'] = "success";

			header("location:login.php");
		}
	}
	
	
	function createDatabase(){		
				
		$sql = "CREATE DATABASE IF NOT EXISTS amtrak";
		
		global $con;
		
		if ($con->query($sql) == FALSE) {
		  echo "Error creating database: " . $conn->error;
		}
	}
	
	function createTables(){	
		global $con;
		$val = mysqli_query($con,'select 1 from user LIMIT 1');
		
		if(!$val){
			$sql = "CREATE TABLE user (
				ID INT(10) AUTO_INCREMENT PRIMARY KEY,
				name VARCHAR(100) NOT NULL,
				email VARCHAR(100) NOT NULL,
				password VARCHAR(100) NOT NULL)";
			
			
			if ($con->query($sql) == FALSE) {
			  echo "Error creating table: " . $conn->error;
			}
		}	
	}	

?>