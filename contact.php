<!DOCTYPE  html>

<html>
	<head>
		<meta charset="utf-8">
		<title>تماس با ما</title>
		<link rel="stylesheet" href="style/contact.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style/form.css" type="text/css" media="screen" />			
	</head>
	<body>
	<div class="formy-holder">
			<p style="font-family:b koodak;font-size:30px;color:red;text-align: right;">فرم تماس با ما</p>
					<?php 
					include('config.php');
		if (isset($_POST['submit'])) {
			if (empty($_POST['subject'])||empty($_POST['message'])||empty($_POST['name'])||empty($_POST['cellphone'])) {
				echo "<font color=red face=tahoma><center>هیچ ورودی غیر از ایمیل نباید خالی باشد*</center></font><br>";
			}
else{
			$sql="INSERT INTO `message` (`id`, `title`, `content`, `email`, `cellphone`, `name`, `date`) VALUES (NULL, '".$_POST['subject']."', '".$_POST['message']."', '".$_POST['name']."', '".$_POST['cellphone']."', '".$_POST['email']."', CURRENT_TIMESTAMP);";
			$query=mysqli_query($con,$sql);
			if (isset($query)) {
				echo "<font color=green face=tahoma><center>پیام شما ارسال شد در صورت برسی توسط مدیر پیامکی برای شما ارسال خواهد شد</center></font><br>";
			}
		}
		}
		?>
			<form id="formy" action="" method="post">
				<fieldset>
					
					<div>
						<input class="subject" name="subject" type="text" title="موضوع پیام" placeholder="موضوع پیام"></textarea>
					</div>
					
					<div>
						<textarea  name="message"   rows="5" cols="20"  title="متن پیام خود را وارد کنید" placeholder="متن پیام"></textarea>
					</div>
					<div>
						<input class="name" type="text" name="name" placeholder="نام و نام خانوادگی شما" title="نام و نام خانوادگی خود را وارد کنید">
					</div>
					<div>
						<input class="cellphone" type="text" name="cellphone" placeholder="شماره تلفن همراه شما" title="تلفن همراه خود را  وارد کنید" maxlength="11">
					</div>
					<div>
						<input class="email" name="email" type="email" title="ایمیل خود را وارد کنید" placeholder="ایمیل شما"></textarea>
					</div>
					
					<p style="font-family:b koodak"><input type="submit" value="ارسال" name="submit" id="submit" /></p>
				</fieldset>
			</form>		
		</div>
	</body>
</html>