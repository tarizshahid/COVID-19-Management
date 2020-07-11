<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $ID=$_POST['id'];
	 $Fname=$_POST['FName'];
     $Lname=$_POST['LName'];
     $address=$_POST['address'];
     $cnic=$_POST['cnic'];
     $num=$_POST['num'];
	 $gender=$_POST['gender'];
	 
	  $query="UPDATE patient_record SET `F_name` = '$Fname',`L_name` = '$Lname',`P_address` = '$address',`CNIC` = '$cnic',`phone_no` = '$num',`Gender` = '$gender' where `P_ID` = '$ID' ";
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