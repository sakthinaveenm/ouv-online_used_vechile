<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $conn =new mysqli('localhost','root','','ouv_shopping_db');
 if($conn->connect_error){
 	echo "$conn->connect_error";
 	die("Connection Failed : ". $conn->connect_error);
	}
    else if($password == $password2)
	{
	$stmt = $conn->prepare("insert into customer(username,email,passwd)value(?,?,?)");	$stmt->bind_param("sss",$username,$email,$password);
	$execval=$stmt->execute();
    header("Location:index.php");	  
}
else
{
    echo "<html><body>
    <script lang='javascript'>
    alert('Error');
  </script></body></html>";
    header("Location:index.php");	

}
?> 