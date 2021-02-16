<?php 
$conn=mysqli_connect('localhost','root','','person');
$req="select * from certification";
$res=mysqli_query($conn,$req);
?>