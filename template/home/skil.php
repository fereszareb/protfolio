<?php 
$conn=mysqli_connect('localhost','root','','person');
$req="select * from skill";
$res=mysqli_query($conn,$req);
?>
<div id="part-two">
    <h2 >SKILLS</h2>
    <div id="place-two">
        <div>
            <?php while ( $et=mysqli_fetch_assoc($res))  { ?>
                <div id="skil">
                
                                        <h4><?php echo($et['name']) ?></h4>
                                        <div  class="progress-bar">
                                            <div style=" content: ''; display: block; height: 8px; background: #999; background: <?php echo($et['color']) ?>; width: <?php echo($et['porcentage']) ?>%;" ></div>
                                        </div>
                                        
                                    
                </div>
            <?php } ?>
        </div>   
        <div>
                <img class="pic-skil" src="image/profile.jpg" alt="">
        </div>
    </div>
</div>