<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>مدیریت شبکه های اجتماعی</title>
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/editcopy.css">
</head>
<body>
<?php include('menu.php'); ?>
<?php
include('../config.php');
$read="SELECT * FROM `follow-us`";
$readquery=mysqli_query($con,$read);
if (isset($_POST['subcopy'])) {
	$editcopy="UPDATE `follow-us` SET `link` = '".$_POST['follow-us']."' WHERE `id` = '".$_POST['id']."';";
	$editquery=mysqli_query($con,$editcopy);

	if ($editquery) {
		echo "<center><font color=green>با موفقیت ویرایش شد</font></center>";

header("Refresh: .5; URL= shabake.php");
	}
}
?>
<?php 
while ($readfetch=mysqli_fetch_assoc($readquery)) {
?>

<form action="" method="post">
	
	<input type="text" name="follow-us" value="<?php echo $readfetch['link'] ?>" class="copy">
	<br>
	<input type="hidden" name="id" value="<?php echo $readfetch['id'] ?>">
	<br>
	<br>
	<input type="submit" name="subcopy" value="ثبت و ویرایش" class="subcopy">
</form>
<p><?php echo $readfetch['title']; ?></p>
<?php } ?>
</body>
</html>