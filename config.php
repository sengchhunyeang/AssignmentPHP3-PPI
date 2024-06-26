<?php
$conn =mysqli_connect("localhost","root","","studentinfo");

if($conn){
  
}else{
  die("cannot connect to database".mysqli_connect_error());
}

?>