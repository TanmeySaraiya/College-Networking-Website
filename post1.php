<?php
include("dbconfig.php");
echo $_POST['title'];
if (isset($_POST['submit']))
{
	$title=$_POST['title'];
	$post=$_POST['post'];
	echo $title;
	$q1="INSERT INTO titlepost(title,post) VALUES ('$title','$post')";
	$abc=$conn->query($q1);
	if($abc)
	{
		echo "HELLO";
	}
	header('location:newsfeed.php');
}