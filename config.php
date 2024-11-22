<?php
$con = mysqli_connect('localhost','root','1234','school');
mysqli_set_charset($con,"utf8");
if (!$con) {
	echo mysqli_connect_error();
}
?>