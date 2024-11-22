<?php if (!isset($_COOKIE['login'])) {
	header('location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/newpost.css">
	<title>افزودن پست جدید</title>
</head>
<body>
<?php include('menu.php'); ?>
<div class="newpostsql">
<?php 
include('../config.php');
if (isset($_POST['newpostsub'])) {
$sqli="INSERT INTO `post` (`id`, `title`, `img`, `content`) VALUES (NULL, '".$_POST['subject']."', '".$_POST['img']."', '".$_POST['text']."');";
if (empty($_POST['subject']) || empty($_POST['img']) || empty($_POST['text'])) {
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
	<label>: موضوع پست</label>
	<br>
	<br>
	<input type="text" name="subject" style="text-align: right;">
	<br>
	<br>
	<br>
	<label>: آدرس تصویر آپلود شده</label>\
	<br>
	<br>
	<br>
	<input type="text" name="img">
	<br>
	<br>
	<br>
	<label>: متن پست</label>
	<br>
	<br>
	<br>
	<textarea name="text" placeholder="...متن پست را وارد کنید"></textarea>
	<br>
	<br>
	<br>
	<input type="submit" name="newpostsub">
</form>
</div>
</body>
</html>