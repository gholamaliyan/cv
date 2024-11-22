<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>مدیریت منوهای قبلی</title>
	<link rel="stylesheet" type="text/css" href="../style/lastpost.css">
	<?php include('style.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>
<?php 
include('../config.php');
$sql="SELECT * FROM `menu` ORDER BY `id` DESC";
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
	<p>لینک منو</p>
</td>
<td>
	<p>موضوع منو</p>
</td>
<td>
	<p>شماره ی منو</p>
</td>
</tr>
<?php
while ($fetch=mysqli_fetch_assoc($query)) {
?>
<tr>
	<td>
		<p><a href="deletemenu.php?id=<?php echo $fetch['id']; ?>">حذف</a></p>
	</td>
	<td>
		<p><a href="editmenu.php?id=<?php echo $fetch['id']; ?>">ویرایش</a></p>
	</td>
	<td>
		<p><?php echo $fetch['link'];?></p>
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