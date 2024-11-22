
    <div class="menu-botton">
    	    <?php 
include('../school/config.php');
$sql="SELECT * FROM `menu`;";
$query=mysqli_query($con,$sql);
while($fetch= mysqli_fetch_assoc($query))
{
    ?>
        <li><a href=<?php echo $fetch["link"]; ?>><?php echo $fetch["title"]; ?></a></li>
        <?php } ?>
        </div>