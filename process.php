

<?php
include 'database.php'; 
// create a variable

$email=$_POST['email'];
$password=$_POST['password'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO fb (uid,pass)
		        VALUES ('$email','$password')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href=\"index.php\">Go Back</a>";
} else {
	echo mysqli_error ($connect);
}