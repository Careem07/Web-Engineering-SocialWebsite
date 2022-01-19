<?php
session_start();


$email=$_POST["email"];
$password=$_POST["password"];
$btn = $_POST["log_btn"];
if (isset($_POST["log_btn"]) )
{
		$con=mysqli_connect("localhost","root","kareem2000","cars_db");
		if ($con)
		{
			$q=mysqli_query($con,"SELECT * FROM users WHERE username= '$email' AND userpasswd='$password'");
			if ($q)
			{
				$row=mysqli_fetch_array($q);
				if (isset($row["username"]) && isset($row["userpasswd"]))
				{	
					echo $row["userid"];
					$_SESSION["userid"]=$row["userid"];
					header("Location: Profile.php");  //Go to Home page 

				}
				else
				{	
					
					echo "<h1 style='font-family: Tahoma, Verdana, Segoe, sans-serif; '><center> Wrong email or password </center></hr>";
					header("Refresh: 3 ; url= Login.html");
				
				}
					
				mysqli_close($con);

				
			}
			else
			{
				echo "not selected";
			}
			mysqli_close($con);
		}
		else
		{
			die("not connected".mysqli_errno());
		}
}












?>