<?php
   $FirstName = $_POST['FirstName'];
   $LastName = $_POST['LastName'];
   $Gender = $_POST['Gender'];
   $Email = $_POST['Email'];
   $Password = $_POST['Password'];
   $Number = $_POST['Number'];
   
   
   $conn = new mysqli('local host','root','','profile');
   if($conn->connect_error){
	   die('Connection_Failed :'.$conn->connect_error);
   }else{
	   $stmt = $conn->prepare("insert into registration(FirstName,LastName,Gender,Email,Password,Number)
	      values(?,?,?,?,?,?)");
		  $stmt->bind_param("sssssi",$FirstName, $LastName, $Gender, $Email, $Password, $Number);
		  $stmt->execute();
		  echo"registration Successfully....";
		  $stmt->close();
		  $conn->close();
   }
?>