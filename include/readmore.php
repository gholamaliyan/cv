<?php 
include('config.php');
$sql="SELECT * FROM `post` WHERE `id`='".$_GET['postid']."';";
$query=mysqli_query($con,$sql);
$fetch=mysqli_fetch_assoc($query);
?>
<div class="readmorepages">
	<div class="readmorepages-title">
		<p><?php echo $fetch['title']; ?></p>
	</div>
	<img src=<?php echo $fetch['img']; ?>>
	<div class="readmorepages-content">
		<p><?php echo $fetch['content']; ?></p>
	</div>
</div>