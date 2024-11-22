<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>مدیریت پست های قبلی</title>
	<link rel="stylesheet" type="text/css" href="../style/lastpost.css">
	<?php include('style.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>
<?php 
include('../config.php');
$sql="SELECT * FROM `post` ORDER BY `id` DESC";
$query=mysqli_query($con,$sql);
if (isset($_GET['okdelete'])) {
	echo "<center><font color=green>با موفقیت حذف شد</font></center>";
}
 ?>
<br>
<br>
<br>
<br>
<br>
<table border="1">
<tr>
	<td>
		<p>حذف</p>
	</td>
	<td>
		<p>ویرایش</p>
	</td>
<td>
	<p>متن کامل پست</p>
</td>
<td>
	<p>تصویر پست</p>
</td>
<td>
	<p>موضوع پست</p>
</td>
<td>
	<p>شماره ی پست</p>
</td>
</tr>
<?php
while ($fetch=mysqli_fetch_assoc($query)) {
?>
<tr>
	<td>
		<p><a href="deletepost.php?id=<?php echo $fetch['id']; ?>">حذف</a></p>
	</td>
	<td>
		<p><a href="editpost.php?id=<?php echo $fetch['id']; ?>">ویرایش</a></p>
	</td>
	<td>
		<p>مشاهده با کلیک روی دکمه ی  ویرایش</p>
	</td>
	<td>
		<p><?php echo $fetch['img'];?></p>
	</td>
	<td>
		<p><?php echo $fetch['title'];?></p>
	</td>
	<td>
		<p><?php echo $fetch['id'];?></p>
	</td>
</tr>
<?php
}
?>
</table>
</body>
</html>