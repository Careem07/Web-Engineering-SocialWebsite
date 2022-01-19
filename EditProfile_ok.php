<?php
session_start();

$userid = $_POST["updated_info_id"];
$username=$_POST["username"];	
$name=$_POST["name"];	
$useremail=$_POST["useremail"];	
$userphone=$_POST["userphone"];	
$userdate=$_POST["userdate"];	
$userbio=$_POST["bio"];	
$userskills=$_POST["skills"];	
	
	
		$con=mysqli_connect("localhost","root","kareem2000","cars_db");
				
			if ($con)
			{	
				$q=mysqli_query($con,"UPDATE users SET `name`='$name',`username`='$username',`userdate`='$userdate',`userphone`='$userphone' ,`userbio`='$$userbio' ,`userskills`='$userskills' WHERE  `userid`='$userid'");
				mysqli_close($con);
				if($q)
				{	
					header("Location: Profile.php");
				}
				else
				{
					echo "nothing updated";
				}
					
			}
?>