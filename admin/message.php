<?php 
if (!isset($_COOKIE['login'])) {
	header("location:index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>پیام های ارسالی</title>
	<link rel="stylesheet" type="text/css" href="../style/message.css">
	<?php include('style.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>
<?php
include('../config.php');
if (isset($_GET['id'])) {
	$sql="SELECT * FROM `message` WHERE `id`='".$_GET['id']."'";
	$query=mysqli_query($con,$sql);
	$fetch=mysqli_fetch_assoc($query);
}
$cell=$fetch['cellphone'];
if (isset($_POST['submits'])) {
	header("location:http://ip.sms.ir/SendMessage.ashx?user=09130741622&pass=2091382&lineNo=50002015209138&to=".$cell."&text=سلام پیام ارسالی شما توسط مدیر دبیرستان شهید رضویان برسی شد");
}
if (isset($_POST['delete'])) {
	$delete="DELETE FROM `message` WHERE `id`=".$_GET['id'].";";
	$delquery=mysqli_query($con,$delete);
}
if (isset($delquery)) {
	header("location:dashboard.php");
}
?>
<p>پیام های ارسالی</p>
<div id="message">
	<div class="date"><h3><?php echo $fetch['date']; ?></h3></div>
	<br>
	<label>شماره ی پیام</label>
	<br>
	<br>
	<div class="id"><h2><?php echo $fetch['id']; ?></h2></div>
	<br>
	<br>
	<br>
	<br>
	<label>موضوع پیام</label>
	<br>
	<br>
	<div class="subject"><h1><?php echo $fetch['title']; ?></h1></div>
	<br>
	<br>
	<br>
	<br>
	<label>متن کامل پیام</label>
	<br>
	<br>
	<div class="text"><h1><?php echo $fetch['content']; ?></h1></div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<label>نام و نام خانوادگی ارسال کننده ی پیام</label>
	<br>
	<br>
	<div class="name"><h1><?php echo $fetch['name']; ?></h1></div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<label>شماره تلفن همراه ارسال کننده پیام</label>
	<br>
	<br>
	<div class="phone"><h2><?php echo $fetch['cellphone']; ?></h2></div>?
	<br>
	<br>
	<br>
	<br>
	<br>
	<label>ایمیل ارسال کننده ی پیام</label>
	<br>
	<br>
	<div class="email"><h1><?php echo $fetch['email']; 
	if (empty($fetch['email'])) {
		echo "ندارد";
	}
	?></h1></div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="" method="post">
		<input type="submit" name="delete" class="delete" value="حذف این پیام">
		<input type="submit" name="submits" class="send" value="ارسال پیامک دریافت پیام به ارسال کننده ی پیام">
	</form>
</div>
</body>
</html>