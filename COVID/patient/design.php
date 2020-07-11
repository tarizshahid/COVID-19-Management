<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $ID=$_POST['ID'];
	 $Fname=$_POST['FName'];
     $Lname=$_POST['LName'];
     $address=$_POST['address'];
     $cnic=$_POST['cnic'];
     $num=$_POST['num'];
	 $gender=$_POST['gender'];
	 
	  $query="INSERT INTO `Patient_record`(`P_ID`,`F_name`, `L_name`, `P_address`, `CNIC`, `phone_no`, `Gender`) VALUES ('$ID','$Fname','$Lname','$address','$cnic','$num','$gender')";
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





