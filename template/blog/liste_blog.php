<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/blog.css">
</head>
<body>
<?php include '../../php/connect_blog.php' ; 

$resulte_per_page = 10; 
$number_of_result = mysqli_num_rows($res) ;
$number_of_pages = ceil($number_of_result/$resulte_per_page);
if (!isset($_GET['page'])) {
    $page = 1 ;
} else { $page = $_GET['page']; }
$this_page_first_result = ($page -1)*$resulte_per_page ;
$sql=" SELECT * FROM blog ORDER BY id ASC LIMIT " . $this_page_first_result . ',' . $resulte_per_page;
$resulte = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($resulte)) { ?>
    <div class="b">
    <a href="blog.php?id=<?php echo($row['id']) ?>"><img src="<?php echo($row['picture']) ?>" alt=""></a>
<div class="kk">
<a href="blog.php?id=<?php echo($row['id']) ?>"><h3><?php echo($row['titre']) ?></h3></a>
<p><?php echo(substr($row['description'],0,150).'...') ?></p>
<div class="butt"> <a href="blog.php?id=<?php echo($row['id']) ?>"><h4>read this</h4> </a>    </div>
</div>

     <!--  <a href="blog.php?id=<?php echo($row['id']) ?>"><h2><?php echo($row['titre']) ?></h2></a> -->
    </div>
<?php } ?>
<br> 
<div style="padding: 10px; margin-top: 10px">
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
?>
<div id="pp"> <?php
echo '<a style="text-decoration: none ; color: black ;" href="blog.php?page='. $page . '">' . $page . '</a>' ; ?>
</div>
<?php } ?>
</div>
