<?php include('menu.php');?>
<?php include('style.php');?>
<head>
	<link rel="stylesheet" type="text/css" href="../style/check-uploads.css">
</head>
<div class="checkbox">
	<?php

if (isset($_POST["filebtn"])) {
	
	if (empty($_FILES["file"])) {
		echo "<center><font color=red face=tahoma>!باید برای آپلود یک فایل انتخاب کنید</font></center>";
	}
	else{
		$filename="../picture/".$_FILES["file"]["name"];
		$filesize=$_FILES["file"]["size"];
		$filetype=$_FILES["file"]["type"];
		$filetmp=$_FILES["file"]["tmp_name"];
	}

	if (is_uploaded_file($filetmp)) {
		if (move_uploaded_file($filetmp, $filename)) {
			echo "<center><font color=lightgreen>آپلود با موفقیت انجام شد</font></center>";
			echo $_FILES["file"]["name"]." : نام فایل  "."<br>";
			echo "حجم فایل : ".$_FILES["file"]["size"]."  بایت"."<br>";
			echo $_FILES["file"]["type"]." : نوع فایل  ";
			echo '<center><a href="'.$filename.'" class=uploadA>آدرس فایل</a></center>';
		}
	}
	else{
		echo "<center><font color=red>آپلود انجام نشد ! ممکن است فایلی انتخاب نشده باشد یا مشکلی از سمت سرور بوجود آمده باشد  یا ممکن است حجم فایل بیش از 1 مگابایت باشد! حتما همه ی پارامتر های گفته شده را برسی کنید</font></center>";
	}

}

	?>

</div>
</body>
</html>