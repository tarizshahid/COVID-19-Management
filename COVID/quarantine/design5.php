<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $ID=$_POST['ID'];
	 $name=$_POST['Name'];
     $city=$_POST['City'];
     $province=$_POST['province'];
     $country=$_POST['country'];
     $beds=$_POST['beds'];
	 
	 
	  $query="UPDATE quarantine_ward SET `w_name` = '$name',`city` = '$city',`province` = '$province',`country` = '$country',`no_of_beds` = '$beds' where `Q_ID` = '$ID' ";
	 if(mysqli_query($conn,$query))
	 {
		echo '<script>alert("Updated Successfully!!!")</script>';
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