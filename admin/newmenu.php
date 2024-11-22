<?php if (!isset($_COOKIE['login'])) {
	header('location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/newpost.css">
	<title>افزودن منوی جدید</title>
</head>
<body>
<?php include('menu.php'); ?>
<div class="newpostsql">
<?php 
include('../config.php');
if (isset($_POST['newmenusub'])) {
$sqli="INSERT INTO `menu` (`id`, `title`, `link`) VALUES (NULL, '".$_POST['title']."', '".$_POST['link']."');";
if (empty($_POST['link']) || empty($_POST['title'])) {
	echo "<center><font color=red>خالی</font></center>";
}
else{
$query=mysqli_query($con,$sqli);

if ($query) {
	echo "<center><font color=green>موفق</font></center>";
}
if (!$query) {
	echo "<center><font color=red>ناموفق</font></center>";
}
}
}
 ?>
</div>
<div class="newpost">
	<form action="" method="post">
	<label>عنوان منو</label>
	<br>
	<br>
	<input type="text" name="title" style="text-align: right;">
	<br>
	<br>
	<br>
	<label>لینک منو</label>\
	<br>
	<br>
	<br>
	<input type="text" name="link">
	<br>
	<input type="submit" name="newmenusub">
</form>
</div>
</body>
</html>