<?php
include("dbconfig.php");
echo $_POST['email'];
session_start();
if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$q="
		SELECT * FROM detailsuser
		where email='$email'
		";
	$r=$conn->query($q);
	$m=$r->num_rows;
	if($m>0)
	{
		$res= $r->fetch_assoc();
		echo $res["password"];
		echo $res["email"];
		if(!strcmp($_POST['password'],$res["password"]))
		{
			$_SESSION['email']=$res['email'];
			$_SESSION['fname']=$res['fname'];
			$_SESSION['profile']=$res['profile'];
			header('location:newsfeed.php');

		}
		else{
			?>
	<script type="text/javascript">
		alert("WRONG PASSWORD");
	</script>			
		<?php
		header('location:register.html');
		}
	}
	else
	{
?>
<script type="text/javascript">
	alert("WRONG USERNAME");
</script>			
<?php

	header('location:register.html');
	}
}
?>