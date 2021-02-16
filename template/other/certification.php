<?php error_reporting(0)?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../css/article.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
      <script type="text/javascript" src="../../js/script.js"></script>
      <link rel="icon" type="image/png" href="../../image/icon/icon.png" />
</head>
<body>
<?php include '../commun/headertwo.php' ?>
<div id="groupe">
                        <div id="artic"style="background-color:transparent ;"> 
                            <?php if ($_GET['id']) {
                                
                                                                                $conn=mysqli_connect('localhost','root','','person');
                                                                                $id=$_GET['id'];
                                                                                $req="select * from certification where(id=$id)";
                                                                                $res=mysqli_query($conn,$req);
                                                                                $et=mysqli_fetch_assoc($res) ;                                
                                
                                                                                ?>
                                                                        <title><?php echo($et['titre']) ?></title>
                                                                    <h2><?php echo($et['titre']) ?></h2>
                                                                    <div id="picture">
                                                                    <img width="100%" src="<?php echo($et['picture']) ?>" >
                                                                    </div>
                                                                    <p><?php echo($et['description']) ?></p> 
                            <?php } else { ?> <title>certification</title> 
                                <?php include 'liste_certif.php' ; } ?>
                        </div>
                        <div id=ad></div>
</div>


<?php include '../commun/footer.php'?>
</body>
</html>