<?php
 require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<meta charset="utf-8">
<title>View Records</title>
<!--<link rel="stylesheet" href="css/style.css" />-->
</head>
<body>
<div class="form">
<p><a href="insert.php"><center>Insert New Record</center></a></p>
<h2><center>View Records</center></h2>
<table id="customers">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>View</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
   $count=1;
   $sel_query="Select * from new_record ORDER BY id desc;";
   $result = mysqli_query($con,$sel_query);
   while($row = mysqli_fetch_assoc($result)) {
	   
//echo"<a href='view.php?Id=".$row['id'] ."'>". $row['name']."</a></td><br>";
	   ?>
   <tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?><td align="center"><a href="se.php?id=<?php echo $row["id"]; ?>">View</a></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Sure to Delete?'); ">Delete</a></td></tr>
<script type="text/javascript">
   function delete_id(id){
         if(confirm('Sure To Delete ?')){
         window.location.href='view.php?delete_id='+id;
     }
}
</script>
<?php $count++; } ?>

</tbody>
</table>
</div>
</body>
</html>
