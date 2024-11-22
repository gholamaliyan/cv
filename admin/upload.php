
<?php include('menu.php');?>
<?php include('style.php');?>
<head>
	<link rel="stylesheet" type="text/css" href="../style/uploads.css">
</head>
<?php
	if (!isset($_COOKIE["login"])) {
		header("location:../login.php");
	}
?>
<div class="sendpost">

		<div class="sendpost-title">
		<p>آپلود فایل</p>
	</div>

<form action="check-upload.php" method="post" enctype="multipart/form-data">
	<label>:فایل را انتخاب کنید</label>
	<input type="file" name="file" value="انتخاب مسیر فایل">
	<br>
	<input type="submit" name="filebtn" value="آپلود">
</form>
</div>
</body>
</html>