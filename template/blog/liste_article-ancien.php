<?php include '../../php/connect_blog.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/blog.css">
</head>
<body>  
    <?php $i=0;
    while ( $et=mysqli_fetch_assoc($res) and ($i<20) )  { $i=$i+1; ?>
    <div style="background-image: url(<?php echo($et['picture']) ?>)" class="a">
       <a href="template/blog/article.php?id=<?php echo($et['id']) ?>"><h2><?php echo($et['titre']) ?></h2></a>
    </div><?php } ?>

    <?php if ($et=mysqli_fetch_assoc($res)) { ?>
        <div class="zonebouton">
            <div class="boutonplus">
        <a class="boutonplus" href="https://www.google.com"><h5>See more</h5></a>
    </div>
    </div>
    <?php } ?>
</body>
</html>