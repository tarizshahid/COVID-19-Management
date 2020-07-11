<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $name=$_POST['Name'];
	 $ID=$_POST['id'];
	  $query="DELETE From quarantine_ward where `Q_ID` = '$ID' AND `w_name` = '$name'";
	 if(mysqli_query($conn,$query))
	 {
		echo '<script>alert("Deleted Successfully!!!")</script>';
	 }
	 else
	 {
		echo '<script>alert("Failed!")</script>';
	 }
	 
 }
else 
{
	
		echo '<script>alert("Form is Empty!")</script>';
}


?>