<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $age = $_POST['age'];
	 $num = $_POST['num'];
	 $email = $_POST['email'];
	 $date = $_POST['date'];
	 $list =$_POST['list'];
	 $sql = "INSERT INTO patient (first_name,last_name,city_name,age,num,email,date,list)
	 VALUES ('$first_name','$last_name','$city_name','$age','$num','$email','$date','$list')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>