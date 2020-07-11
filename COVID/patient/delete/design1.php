<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $ID=$_POST['id'];
	  $query="DELETE From patient_record where `P_ID` = '$ID' ";
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