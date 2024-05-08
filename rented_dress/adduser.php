<?php
    $firstname = $_POST["firstname"]; 
	$lastname = $_POST["lastname"];	
	$email = $_POST["email"]; 
	$password = $_POST["password"];


    $db =  mysqli_connect("127.0.0.1", "root" , "", "nipun");
	
	if ($db->connect_error) {
         echo "Something wrong with datababse connection";
     }
	 else{
		 echo "Succesfull";
	 }
	 
	 $x = "INSERT INTO user (firstname, lastname , email , password ) VALUES ('$firstname', '$lastname', '$email', '$password')";
	 
	 $db->query($x);
	 header("Location:./index.php"); 

?>