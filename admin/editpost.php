<?php if (!isset($_COOKIE['login'])) {
	header('location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/newpost.css">
	<title>ویرایش پست سایت</title>
</head>
<body>
<?php include('menu.php'); ?>
<div class="newpostsql">
<?php 
include('../config.php');
if (isset($_GET['id'])) {
	$sql2="SELECT * FROM `post` WHERE `id`='".$_GET['id']."'";
	$query2=mysqli_query($con,$sql2);
	$fetch2=mysqli_fetch_assoc($query2);
}
if (isset($_POST['newpostsub'])) {
$sqli="UPDATE `post` SET `title` = '".$_POST['subject']."', `img` = '".$_POST['img']."', `content` = '".$_POST['text']."' WHERE `id` = '".$_GET['id']."';";
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
	<input type="text" name="subject" style="text-align: right;" value="<?php echo $fetch2['title']; ?>">
	<br>
	<br>
	<br>
	<label>: آدرس تصویر آپلود شده</label>\
	<br>
	<br>
	<br>
	<input type="text" name="img" value="<?php echo $fetch2['img']; ?>">
	<br>
	<br>
	<br>
	<label>: متن پست</label>
	<br>
	<br>
	<br>
	<textarea name="text" placeholder="...متن پست را وارد کنید"><?php echo $fetch2['content']; ?></textarea>
	<br>
	<br>
	<br>
	<input type="submit" name="newpostsub" value="ویرایش" style="font-family: b koodak">
</form>
</div>
</body>
</html>