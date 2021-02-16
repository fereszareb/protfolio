
<?php include 'connect_blog.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .c{
        height: 200px;
        width: 300px;
        background-color: brown;
        border: black;
    }
    .a{
        height: 300px;
        width: 300px;
        background-color: blueviolet;
        text-align: center;
        margin : 5px;
        padding : 10px
        text-decoration: transparent;
    }
    h1{
        height:300px;
        width:300px;
    color :transparent ;
    }
       h1:hover {
           color :black ;
           background-color: green;
       } 
    }
    body {
        display: flex;
    }
</style>
<body>  
    <?php while ( $et=mysqli_fetch_assoc($res))  { ?>
    <div class="a">
        <h1><?php echo($et['titre']) ?></h1>
        <p><?php echo($et['description']) ?></p>
    </div> <?php } ?>
</body>
</html>