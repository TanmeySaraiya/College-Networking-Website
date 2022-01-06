<?php
include("dbconfig.php");
echo $_POST['comment'];

echo $_POST['postid'];
if (isset($_POST['submit']))
{
	$comment=$_POST['comment'];
	$postid=$_POST['postid'];
	$q1="INSERT INTO comments(post_id,comment) VALUES ('$postid','$comment')";
	$abc=$conn->query($q1);
	if($abc)
	{
		echo "HELLO";
	}
echo "HELLO";
	header('location:newsfeed.php');
}