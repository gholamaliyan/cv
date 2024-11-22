<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>مدیریت سایدبار مناسبت</title>
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/editcopy.css">
</head>
<body>
<?php include('menu.php'); ?>
<?php
include('../config.php');
$read="SELECT * FROM `monasebat`";
$readquery=mysqli_query($con,$read);
$readfetch=mysqli_fetch_assoc($readquery);
if (isset($_POST['subcopy'])) {
	$editcopy="UPDATE `monasebat` SET `title` = '".$_POST['titleshoar']."', `img` = '".$_POST['imgshoar']."' WHERE `id` = 1;";
	$editquery=mysqli_query($con,$editcopy);

	if ($editquery) {
		echo "<center><font color=green>با موفقیت ویرایش شد</font></center>";

header("Refresh: .5; URL= monasebat.php");
	}
}
?>
<img src=<?php echo $readfetch['img']; ?>>
<br>
<br>
<form action="" method="post">
		<input type="text" name="titleshoar" value="<?php echo $readfetch['title'] ?>" class="title" placeholder="موضوع مناسبت">
	<br>
	<br>
	<br>
	<input type="text" name="imgshoar" value="<?php echo $readfetch['img'] ?>" class="copy" placeholder="آدرس تصویر">
	<br>
	<br>
	<br>
	<input type="submit" name="subcopy" value="ثبت و ویرایش" class="subcopy">
</form>
</body>
</html>