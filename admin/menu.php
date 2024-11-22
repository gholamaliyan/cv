<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<div class="menu" id="myTopnav">

	<ul>
				<img src="menu.png" href="javascript:void(0);" class="ion" onclick="myFunction()" title="منو" style="float: right; ">
<li><a href="dashboard.php">صفحه ی اصلی</a></li>
<li><a>مدیریت منو</a>
<ul>
	<li><a href="newmenu.php">افزودن منوی جدید</a></li>
	<li><a href="lastmenu.php">مدیریت منو های قبلی</a></li>
</ul>
</li>
<li><a>مدیریت پست</a>
<ul>
	<li><a href="newpost.php">افزودن پست جدید</a></li>
	<li><a href="lastpost.php">مدیریت پست های قبلی</a></li>
</ul>
</li>
<li><a>مدیریت سایدبار</a>
<ul>
	<li><a href="sal.php">سایدبار شعار سال</a></li>
	<li><a href="monasebat.php">سایدبار مناسبت روز</a></li>
</ul>
</li>
<li><a href="shabake.php">مدیریت شبکه های اجتماعی</a></li>
<li><a href="copyright.php">کپی رایت</a></li>
<li><a href="../">مشاهده ی سایت</a></li>
<li><a href="upload.php">آپلود فایل</a></li>
<li><a href="exit.php?exit">خروج از پنل مدیریت</a></li>


	</ul>
</div>
<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
} 
</script>