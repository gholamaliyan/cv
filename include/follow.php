<!DOCTYPE html>
<div class="follow-us">
	<p>ما را در شبکه های اجتماعی دنبال کنید</p>
	<div class="icon">
                                <?php 
include('config.php');
$sqls="SELECT * FROM `follow-us`;";
$querys=mysqli_query($con,$sqls);
while($fetchs=mysqli_fetch_assoc($querys))
{
                ?>
        <a href=<?php echo $fetchs['link']; ?>><img src=<?php echo $fetchs['img']; ?> title="<?php echo $fetchs['title']; ?>"></a>
<?php } ?>
	</div>
</div>