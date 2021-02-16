<?php 
$conn=mysqli_connect('localhost','root','','person');
$req="select * from portfolio";
$res=mysqli_query($conn,$req);
?>