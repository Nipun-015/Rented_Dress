<?php
    $Category = $_POST["Category"]; 
	$Days = $_POST["Days"];	
	$name = $_POST["name"]; 
	$contact = $_POST["contact"];


    $db =  mysqli_connect("127.0.0.1", "root" , "", "nipun");
	
	if ($db->connect_error) {
         echo "Something wrong with datababse connection";
     }
	 else{
		 echo "Succesfull";
	 }
	 
	 $x = "INSERT INTO ordernow (Category, Days , name , contact ) VALUES ('$Category', '$Days', '$name', '$contact')";
	 
	 $db->query($x);
	 header("Location:./index.php"); 

?>