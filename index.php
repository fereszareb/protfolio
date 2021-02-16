
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Personal Website</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
      <script type="text/javascript" src="js/script.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
      <link rel="icon" type="image/png" href="image/icon/icon.png" />

   </head>
   <body>
      <div class="wrapper">
         <?php include 'template/home/navbar.php' ?>
         <?php include 'template/home/about.php' ?>
         <?php include 'template/home/skil.php' ?>
         
         <div id="part-three">
         <?php include 'template/blog/small_article.php' ?>    
         </div>
         <?php include 'template/home/forms.php' ?>
      </div>
      <?php include 'template/commun/footer.php' ?>

   </body>
</html>