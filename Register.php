<?php

$name = $_POST["name"];  
$username = $_POST["username"];
$password1 = $_POST["password1"];
$date = $_POST["date"];

if(isset($_POST["submit_btn"]))

{
		$con=mysqli_connect("localhost","root","kareem2000","cars_db");
		
		if ($con)
		{
			$q=mysqli_query($con,"INSERT INTO `users`(`userid`, `name`, `username`, `userpasswd`, `userdate`) VALUES ('NULL','$name','$username','$password1','$date')");
			if ($q)
			{
				mysqli_close($con);
				
				header("Location: Login.html");  
			}
			else
			{
				echo "not inserted";
			}
			mysqli_close($con);
		}
		else
		{
			die("not connected".mysqli_errno());
		}
}
else
{
	echo "enter data first";
}





?>

("INSERT INTO `users`(`userid`,`name`, `username`, `userpasswd`, `userdate`)
					VALUES (NULL ,'$name','$username','$passw1','$date') ");