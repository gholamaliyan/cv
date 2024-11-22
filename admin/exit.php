<?php
if (isset($_GET['exit'])) {
setcookie("login","login",time()-(3600));
header('location:index.php');
}
?>