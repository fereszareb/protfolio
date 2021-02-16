<?php $conn=mysqli_connect('localhost','root','','person');
$id=$_GET['id'];
$req="select * from blog where(id=$id)";
$res=mysqli_query($conn,$req);
$et=mysqli_fetch_assoc($res) ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($et['titre']) ?></title>
</head>
<body>  
           <h1><?php echo($et['titre']) ?></h1>
           <p><?php echo($et['description']) ?></p>


           <p>hello</p>
</body>
</html>