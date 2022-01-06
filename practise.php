<?php
include("dbconfig.php");

$q="
		SELECT * FROM detailsuser
		";
$r=$conn->query($q);
$m=$r->num_rows;
if($m>0)
{
	echo $m;
}
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
	echo $row['fname'];
	echo $row['lname'];
}