<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<html>
<head>
 <meta name="viewport" content="width=device-width">
 <link href="../style/dashboard.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 1400px)" />
<link rel="stylesheet" media="only screen and (min-width: 180px) and (max-width: 440px)" href="../style/mobile.css">
<link rel="stylesheet" media="only screen and (min-width:441px) and (max-width: 899px)" href="../style/mobile.css">
<link rel="stylesheet" media="only screen and (min-width:900px) and (max-width: 1399px)" href="../style/laptop.css">
	<title>پنل مدیریت</title>
</head>
<body>

<?php include('menu.php'); ?>
<div class="wellcome">
	ادمین گرامی به پنل مدیریت خوش آمدید
</div>
<?php
include('../config.php');
$sql="SELECT * FROM `post` ORDER BY `id` DESC";
$query=mysqli_query($con,$sql);
?>
<div class="post-manage">
	<div class="post-manage-title">
		<p>پست های ارسالی در سایت</p>
	</div>
	<ul>
		<?php
	while ($fetch=mysqli_fetch_assoc($query)) {
		?>
		<li><a href="editpost.php?id=<?php echo $fetch['id']; ?>"><?php echo $fetch['title']; ?></a></li>
		<?php } ?>
	</ul>
</div>
<?php
include('../config.php');
$sql2="SELECT * FROM `message` ORDER BY `id` DESC";
$query2=mysqli_query($con,$sql2);
?>
<div class="message">
	<div class="message-title"><p>پیام های ارسالی</p></div>
	<div class="message-content">
		<ul>
			<?php
	while ($fetch2=mysqli_fetch_assoc($query2)) {
		?>
			<li><a href="message.php?id=<?php echo $fetch2['id']; ?>"><?php echo $fetch2['title']; ?></a></li>
			<?php } 
			?>

		</ul>
	</div>
</div>
<?php
include('../config.php');
$sql3="SELECT * FROM `pand` WHERE rand()";
$query3=mysqli_query($con,$sql3);
$fetch3=mysqli_fetch_assoc($query3)
?>
<div class="sidebar-admin">
	<div class="sidebar-title"><p>جملات پند دهنده</p></div>
	<div class="sidebar-content">
		<p><?php echo $fetch3['text']; ?></p>
		<br>
		<p>" از جملات گرانقدر " <?php echo $fetch3['writer']; ?></p>
	</div>
</div>
</body>
</html>