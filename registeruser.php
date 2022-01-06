<?php 
	
	include("dbconfig.php");
	echo "HEllo" ;
	$fname = $_POST['firstname'];
	echo $fname;
	if (isset($_POST['submit']))
	{
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$acdyear=$_POST['acdyear'];
		$branch=$_POST['branch'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$gender= $_POST['gender'];
		$city = $_POST['city'];
		$date  = "$year-$month-$day";
		//$tmpname =addslashes(file_get_contents($_FILES["imag"]["tmp_name"]));
		$imagename=$_FILES["imag"]["name"];
 		$tempname=$_FILES["imag"]["tmp_name"];
 		$imagefolder = "image/".$imagename;
 		echo $tempname."<br>";
 		echo $imagefolder;
 		move_uploaded_file($tempname,$imagefolder);
		echo $fname;
			if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
			} 
			else
			{
				echo "connection done";
			}
			$q1="INSERT INTO detailsuser(fname,lname,email,password,datea,gender,city,acdyear,branch,profile) VALUES ('$fname','$lname','$email','$password','$date','$gender','$city','$acdyear','$branch','$imagefolder')";
			
			
			$abc=$conn->query($q1);
			if($abc)
			{
				echo "HELLO";
			}
			else
			{
				echo "NO";
			}
			header('location:index.html');
		//}
	}
	//}	
?>