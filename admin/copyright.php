<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>مدیریت و تغییر کپی رایت سایت</title>
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/editcopy.css">
</head>
<body>
<?php include('menu.php'); ?>
<?php
include('../config.php');
$read="SELECT * FROM `all-right`";
$readquery=mysqli_query($con,$read);
$readfetch=mysqli_fetch_assoc($readquery);
if (isset($_POST['subcopy'])) {
	$editcopy="UPDATE `all-right` SET `text` = '".$_POST['copyright']."' WHERE `id` = 1;";
	$editquery=mysqli_query($con,$editcopy);

	if ($editquery) {
		echo "<center><font color=green>با موفقیت ویرایش شد</font></center>";

header("Refresh: .5; URL= copyright.php");
	}
}
?>
<form action="" method="post">
	<input type="text" name="copyright" value="<?php echo $readfetch['text'] ?>" class="copy">
	<br>
	<br>
	<br>
	<input type="submit" name="subcopy" value="ثبت و ویرایش" class="subcopy">
</form>
</body>
</html>