<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	 $ID=$_POST['id'];
	  $query="Select * From patient_record where `P_ID` = '$ID'";
	  $result=$conn->query($query);
	 if(mysqli_query($conn,$query))
	 {
		 if ($result->num_rows > 0) {
		echo '<script>alert("Data Found!")</script>';
		Header('Location: form1.html');
  exit;
	} 
	else {
		echo '<script>alert("Data Not Found!")</script>';
	}
}
else
{
		echo '<script>alert("Failed!")</script>';
 }
	 
 }
else 
{
	
		echo '<script>alert("Form is Emptys!")</script>';
}
?>




