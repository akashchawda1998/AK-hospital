<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $message = $_POST['message'];
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	
	 $sql = "INSERT INTO contact (message,name,email,subject)
	 VALUES ('$message','$name','$email','$subject')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>