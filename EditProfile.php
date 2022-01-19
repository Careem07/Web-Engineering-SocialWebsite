<?php

session_start();

$userid = $_SESSION["userid"];


if (isset($_SESSION["userid"]))
{
			
			$con=mysqli_connect("localhost","root","kareem2000","cars_db");
			
			if ($con)
			{	
				$q=mysqli_query($con,"SELECT `userid`, `name`, `username`, `userpasswd`, `userdate` ,`userphone` FROM `users` WHERE `userid`=$userid");
				if ($q)
				{	
					$row=mysqli_fetch_array($q);
					mysqli_close($con);
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
		echo "Login first <a href='Login.html'> Click here to login </a>";
	}


?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post" action="EditProfile_ok.php">
			
				  <input type="hidden" name="updated_info_id" value= "<?php echo $row["userid"] ?>">
                <div class="row" style="margin-left : 270px;">
                    <div>
                        <div class="profile-img"  style="width : 100px" >
                            <div class="file btn btn-sm btn-primary">
								Choose File
                                <input type="file" name="file" style="display:inline-block;"/>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pp">
                                    <h5>
										<?php echo $row["name"]; ?>
                                    </h5>
                                    <h6>
                                    
                                    </h6>
									<br> <br> <br><hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Posts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="upRightLinks">
                       
						<a href="HomePage.php" style="font-weight: 600;
														font-size: 17px; float : right;" >
																						Homepage</a> <br> <br>
						<a href="EditProfile.php"style="font-weight: 600;
														font-size: 17px; float : right;">Edit Profile</a> <br> <br>
						<a href="Logout.php"style="font-weight: 600;
														font-size: 17px; float : right; " >Log out</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
							<br>
                            <h4>BIO</h4>
                            <input type="text" name="bio" value="<?php echo $row["userbio"]?>"  style=" width: 40%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;" > <br>
                           
                            <h4>Skills</h4>
                            <input type="text" name="skills" value="<?php echo $row["userskills"]?>"  style=" width: 40%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;"> <br>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                              
												<input type="text" name="username" value="<?php echo $row["username"] ?>" style=" width:50%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                             
												<input type="text" name="name" value="<?php echo $row["name"] ?>" style=" width: 50%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;" required>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                
												<input type="text" name="useremail" value="<?php echo $row["name"] ?>" style=" width: 50%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;" required >
												
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="userphone" value="<?php echo $row["userphone"] ?> " style=" width: 50%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of birth</label>
                                            </div>
                                            <div class="col-md-6">
                                               <input type="text" name="userdate" value="<?php echo $row["userdate"] ?>" style=" width: 50%;
																								padding: 1px 12px;
																								margin: 8px 0;
																								box-sizing: border-box;
																								border-left: none;
																								border-top: none;
																								border-right: none;" required >
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-6">
                                               <input type="button" class="btn btn-primary" id="changepass" name="changepass" value="Change Password">
	
                                            </div>
											<div class="test">
											
											</div>
                                          
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<br> <br>
					 <input type="submit" name="save_btn" class="btn btn-danger" style="font-weight: 600;
														font-size: 17px; margin : auto; margin-bottom : 20px " value="Save">
                </div>
            </form>           
        </div>
		
		
<script type="text/javascript">
$(document).ready(function(){
			$("#changepass").one("click" , function(){
				
				var html = '';
				html = '<input type="password" name="userpasswd" value="<?php echo $row["userpasswd"] ?>" style="border : none; border-bottom : 2px solid ; width : 70%; padding: 1px 12px; margin-left: 12px;  ">';
				
				$(".test").append(html);
				
			});
});

</script>
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.pp h5{
    color: #333;
	width: 200px;
		 position : relative;

	
	
}
.pp h6{
    color: #0062cc;
	width: 200px;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.upRightLinks{
	 position : relative;
    margin-left: 370px;
	
}
.upRightLinks .a:Hover{
    font-size: 19px;
	color : black;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.pp .nav-tabs{
    margin-bottom:5%;

}
.pp .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.pp .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work a:Hover{
    text-decoration: underline;
    color: #495057;
    font-weight: 600;
    font-size: 17px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

</style>