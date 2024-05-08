<?php
    $email = $_GET["email"];
    $password = $_GET["password"];

    $db =  mysqli_connect("127.0.0.1", "root" , "", "nipun");
	$x = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
	$result = $db->query($x);

	if($result->num_rows>0){
		if(isset($_GET["remember"])){
			setcookie("is_login",true, time()+ 600);
		}
		else{
			setcookie("is_login",true, time()+ 600);
		}		
		setcookie("user",$email, true, time()+ 600);
		header("Location:./index.php");
	}
	else{
		setcookie("login_error","Username and
		password doesn't match", time()+ 600 );
		header("Location:./login.php");   
	}
?>
