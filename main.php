<?php
//sign in and displaying the username to display code
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['username']; 
 $conn =new mysqli('localhost','root','','ouv_shopping_db');
 if($conn->connect_error){
 	echo "$conn->connect_error";
 	die("Connection Failed : ". $conn->connect_error);
}
else{
	$stmt = $conn->prepare("select * from customer where  (username=? or email =?) and passwd=?");
	$stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
    $row = $stmt_result -> fetch_array(MYSQLI_ASSOC);
  }
else{ header("location:index.php?loginwrong=''");
}
}
?>