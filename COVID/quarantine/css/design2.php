<html>
  <head>
    <title> Patient Record </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
      body{
  background-image:url("grass.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
	background-size: cover;
}
table, th,td{
  width: 90%;
  margin: auto;
  border: 1px solid white;
  border-collapse: collapse;
  text-align: center;
  font-size: 15px;
  table-layout: fixed;
  background: blue;
  opacity: 0.5;
  color: white;
  margin-top: 50px;
}
th,td{
  padding: 20px;
  opacity: 0.9;
}
    </style>
    </head>
<body>

  <center>
    <p style="font-size:50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Patient Record </p>
    </center>
<table>
<tr>
<th> ID </th>
<th> First Name </th>
<th> Last Name </th>
<th> Address </th>
<th> CNIC </th>
<th> Phone No </th>
<th> Gender </th>
</tr>
</table>
</body>
</html>
<?php
$user='root';
$pass="";
$database="DB Project";
$host="localhost";
$conn=mysqli_connect($host, $user, $pass, $database);

 if(isset($_POST['submit']))
 {
	  $query="Select * From patient_record";
	  $result=$conn->query($query);
	 if(mysqli_query($conn,$query))
	 {
		 if ($result->num_rows > 0) {
?>		
<body>
<table>
<?php	 
echo "<hr><hr>";
		while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<th>$row[P_ID]</th>";
echo "<th>$row[F_name]</th>";
echo "<th>$row[L_name]</th>";
echo "<th>$row[P_address]</th>";
echo "<th>$row[CNIC]</th>";
echo "<th>$row[phone_no]</th>";
echo "<th>$row[Gender]</th>";
echo "</tr>	";
			}
	} 
else {

		echo '<script>alert("No Data Found!")</script>';
}
?>
</table>
</body>
<?php
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
