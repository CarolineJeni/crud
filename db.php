<?php
try{
     $con = mysqli_connect("localhost","root","","data1");
   }catch (Exception $e){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>



