<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<style>
*{
	margin: 0;
	padding: 0;
}

.menu{
	width: 100%;
	height: auto;
	float: right;
	background-color: #2c3e50
}
.menu ul li{
	display: inline;
	padding:15px 15px;
	float: right;
	font-family: b koodak;
	font-size: 14px;
	list-style: none;
	position: relative;
	display: inline-table;
}
.menu img{
	width: 0;
	height: 0
}
.menu ul li a{
	color: #fff;
	transition: all 0.3s ease-in-out;
}
a{
	text-decoration: none;
}
.menu ul li a:hover{
	padding-right: 15px
}
.menu ul ul {
	display: none;
}
 
.menu ul li:hover > ul {
	display: block;
}
.menu ul:after {
	content: "";
	clear: both;
	display: block;
}
.menu ul li {
	float: right;
	position: relative;
}

.menu ul li a {
	display: block;
	text-decoration: none;
}
.menu ul ul {
	background: #2c3e50 ;
	position: absolute;
	top: 100%;
	float: right;
	text-align: right;
	right: 0;
	width: 185px;
}
.menu ul ul li {
	float: none;
	position: relative;
}
.menu ul ul li a {
	padding: 10px 0px;
	color: #fff;
}	
.menu ul ul ul {
	position: absolute;
}
.menu img{
	position: fixed;
}
</style>