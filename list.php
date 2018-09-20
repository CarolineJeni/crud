<html>
<head>
</head>
<body>
 <?php
$con = mysqli_connect("localhost","root","","data1");

// Check connection
if (mysqli_connect_errno())
  {  

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	$sql = "select * from new_record";
 
	$qury = mysqli_query($con,$sql);
 
	while($row = mysqli_fetch_array($qury))
	
     echo "<a href='view.php?Id=".$row[0] ."'>". $row[2]."</a><br>";
	 
	 
 ?>
 </body>