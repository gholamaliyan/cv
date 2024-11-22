<?php
function post_comment($text)
{
$string = substr($text, 0, 270);
$str= substr($string, 0, strrpos($string, ' '));
echo " ...  ".$str;

}
?>