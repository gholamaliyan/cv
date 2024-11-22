<?php if (!isset($_COOKIE['login'])) {
	header('location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include('style.php'); ?>
	<link rel="stylesheet" type="text/css" href="../style/newpost.css">
	<title>ویرایش منو سایت</title>
</head>
<body>
<?php include('menu.php'); ?>
<div class="newpostsql">
<?php 
include('../config.php');
if (isset($_GET['id'])) {
$sql="SELECT * FROM `menu` WHERE `id`='".$_GET['id']."' ";
$query2=mysqli_query($con,$sql);
$fetch2=mysqli_fetch_assoc($query2);
}
if (isset($_POST['newmenusub'])) {
$sqli="UPDATE `menu` SET `link` = '".$_POST['link']."', `title` = '".$_POST['title']."' WHERE `id` = '".$_GET['id']."';";
if (empty($_POST['link']) || empty($_POST['title'])) {
	echo "<center><font color=red>خالی</font></center>";
}
else{
$query=mysqli_query($con,$sqli);

if ($query) {
	echo "<center><font color=green>با موفقیت ویرایش شد. لطفا جهت برسی صفحه را مجدد بارگذاری کنید</font></center>";

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
	<input type="text" name="title" style="text-align: right;" value="<?php echo $fetch2['title'] ?>">
	<br>
	<br>
	<br>
	<label>لینک منو</label>\
	<br>
	<br>
	<br>
	<input type="text" name="link" value="<?php echo $fetch2['link'] ?>">
	<br>
	<input type="submit" name="newmenusub" value="ویرایش" style="font-family: b koodak">
</form>
</div>
</body>
</html>