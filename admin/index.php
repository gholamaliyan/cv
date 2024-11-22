<?php 
if (isset($_COOKIE['login'])) {
	header('location:dashboard.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ورود به قسمت ادمین</title>
	<link rel="stylesheet" type="text/css" href="../style/login.css">
</head>
<body>
	 <div class="header">
	 	<p>ورود به پنل مدیریت  | login to admin panel</p>
	 </div>
	 	<?php 
			if (isset($_POST['sub'])) {
				if (empty($_POST['username']) || empty($_POST['password'])) {
					echo "<center><font face=tahoma color=red>ورودی ها نباید خالی باشند</font></center>";
				}
				elseif ($_POST['username']=="admin" && $_POST['password']=="admin") {
					setcookie("login","login",time()+(3600));
					header('location:dashboard.php');
				}
				else{
					echo "<center><font color=red face=tahoma>نام کاربری و یا رمز عبور اشتباه است</font></center>";
				}
			}
	 ?>
	 <div class="input">
<form action="" method="post">
	<label>نام کاربری</label>
	<input type="text" name="username" placeholder="نام کاربری را وارد نمایید">
	<br>
	<br>
	<br>
	<label>رمز ورود</label>
	<input type="password" name="password" placeholder="رمز عبور را وارد نمایید" required>
	<input type="submit" name="sub" value="ورود" >
</form>
<div class="danger">
	<p>توجه داشته باشید این قسمت تنها مخصوص شخص مدیریت میباشد و ورود غیر قانونی دانش آموزان پیگرد قانونی دارد</p>
	<p><?php 
	$ip=getenv("REMOTE_ADDR"); 
	echo"آدرس آیپی شما " . $ip;
	?></p>
</div>
</div>
</body>
</html>