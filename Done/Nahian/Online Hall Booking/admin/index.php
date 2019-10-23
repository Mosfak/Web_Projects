<?php
include("include/db_config.php");
?>
<html>
<head>
<title>Hall Booking System</title>
<style>

.sr {
	background-image: linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -o-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(73,132,180)),
		color-stop(1, rgb(97,155,203))
	);

	color:#fff;
	background-repeat:repeat-x;
	border:1px solid #d1c7ac;
	width: 400px;
	height:30px;
	border-radius:10px;
	padding:10px;
	margin-right:4px;
	margin-bottom:8px;
	font-family:Times news roman;
	font-size: 20px;
	box-shadow:2px 2px 2px #000;
	
}


.btn{
	display: inline-block;
	text-decoration: none;
	color: #fff;
	font-weight: bold;
	background-color: #538fbe;
	padding: 3px 32px;
	font-size: 20px;
	border: 2px solid #2d6898;
	background-image: linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -o-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(73,132,180)),
		color-stop(1, rgb(97,155,203))
	);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	text-shadow: 0px -1px 0px rgba(0,0,0,.5);
	-webkit-box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	-moz-box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	box-shadow: 0px 6px 0px #2b638f, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	-webkit-transition: all .1s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	-webkit-transform: rotateX(20deg);
}

.btn:hover {
	background-image: linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -o-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(79,142,191) 0%, rgb(102,166,214) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(79,142,191)),
		color-stop(1, rgb(102,166,214))
	);
}

.btn:active {
-webkit-box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
-moz-box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
box-shadow: 0px 2px 0px #2b638f, 0px 1px 6px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
	background-image: linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -o-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(88,154,204) 0%, rgb(90,150,199) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(88,154,204)),
		color-stop(1, rgb(90,150,199))
	);
    -webkit-transform: translate(0, 4px) rotateX(20deg);  
    -moz-transform: translate(0, 4px);  
    transform: translate(0, 4px);  
}

</style>
</head>
<body>

<div style="padding:200px; padding-left:500px;">
<form action="" method="post">
<input type="text" class="sr" placeholder="Username" name="user"><br>
<input type="Password" class="sr" placeholder="Password" name="pwd">
<br>
<input type="submit" value="Login" class="btn" name="btnlogin">
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$uname = validate_input($_POST["user"]);
			$pwd = validate_input($_POST["pwd"]);
		if($uname =="" || $pwd=="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM admin_login where ad_username='$uname' and ad_password='$pwd'";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$uname;
						setcookie('user_n',$uname,time() + 86400*30,'/');
						setcookie('user_p',$pwd,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo "<script> alert('Invalid Username or Password!');</script>";
						return;
					}		
}
}
?>
