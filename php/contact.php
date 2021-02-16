
    <link rel='stylesheet' href='../css/article.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
      <script type="text/javascript" src="../js/script.js"></script>


<?php
$conn=mysqli_connect("localhost","root","","person") or die(mysqli_error());


if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
   include 'erreur.php';
   }else {
   $NOM=$_POST['nom'];
   $PREN=$_POST['prenom'];
   $EMAIL=$_POST['email'];
   $CHOI=$_POST['choix'];
   $MESS=$_POST['message'];
   $TIME=date("Y-m-d H:i:s");
   $IP=$_SERVER['REMOTE_ADDR'];
    $req="INSERT INTO contact (nom,prenom,email,choix,messages,temp,IP) VALUES ('".$NOM."','".$PREN."','".$EMAIL."','".$CHOI."','".$MESS."','".$TIME."','".$IP."')" ;
    $res=mysqli_query($conn,$req);
    include 'succsesscontact.php' ;
 }



