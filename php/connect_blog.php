<?php 
$conn=mysqli_connect('localhost','root','','person');
$req="select * from blog ORDER BY id ASC";
$res=mysqli_query($conn,$req);
?>