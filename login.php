<?php
$conn = mysqli_connect('localhost','root','','piyush');
$username=$_POST['username'];
$password=$_POST['password'];
$s = "select * from login where username='$username'&& password='$password' ";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$c=mysqli_num_rows($result);
if ($c == 1) {
header("Location:fulldetails.html");	
}
else{
	echo '<script type="text/javascript"> 
window.onload=function(){
	alert("Invalid username and password")
}
</script>
	';
}
?>
