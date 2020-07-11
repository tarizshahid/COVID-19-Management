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
	 
	  $query="INSERT INTO `isolation_ward`(`I_ID`,`w_name`, `city`, `province`, `country`, `no_of_beds`) VALUES ('$ID','$name','$city','$province','$country','$beds')";
	 if(mysqli_query($conn,$query))
	 {
		echo '<script>alert("Inserted Successfully!!!")</script>';
	 }
	 else
	 {
		echo '<script>alert(" Failed! ")</script>';
	 }
	 
 }
else 
{
	
		echo '<script>alert("Form is Empty!")</script>';
}


?>





