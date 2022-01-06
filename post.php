<?php
include("dbconfig.php");
if (isset($_POST['submit']))
{
	$title=$_POST['title'];
	$post=$_POST['post'];
	echo $title;
}