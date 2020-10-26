<?php
	   $user="radhika";
	   $pass="radhika123";
	   $errorMsg="";
	   $iserror=false;
	if(isset($_POST['submit']))
	{
		$loginuser=$_POST['username'];
		$loginpass=$_POST['password'];
		if($loginuser==$user)
		{
			if($loginpass==$pass)
			{
				//session_start();
				//$_SESSION['myuser'] = $loginuser;
				
				setcookie('myuser','radhika',time()+3600); 
				header('Location:home.php');
			}
			else
			{
				$errorMsg="password is incorrect";
				$iserror=true;
			}
		}
		else
		{
			$errorMsg="user name is not valid";
			$iserror=true;
		}
	}
	?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		label{
			display: block;
			margin-bottom: 10px;
			font-family: arial;
			//color: #fff;
		}
		input{
			width: 350px;
			margin-bottom: 10px;
			padding: 10px;
			border-radius: 2px;
			border: 0px solid;
			background-color: #C2C6CF;
			opacity: .4;
			margin-bottom: 20px;
			
			
		}
	  form .btn{
			background-color: #000000;
			color: white;
			opacity: 1;
			width: 180px;
		    margin-right: 10px;
		  float: left;}
		  input[type="text"]{
			  background: url(image/user-outline.png) no-repeat;
			  text-indent: 20px;
			  width: 350px;
			margin-bottom: 10px;
			padding: 10px;
			border-radius: 2px;
			border: 0px solid;
			background-color: #C2C6CF;
			opacity: .4;
			margin-bottom: 20px;
			  padding-top: 2px;
			 
			  
				  
		  }	
		  input[type="password"]{
			  background:url(image/lock.png) no-repeat;
			  text-indent: 20px;
			  width: 350px;
			margin-bottom: 10px;
			padding: 10px;
			border-radius: 2px;
			border: 0px solid;
			background-color: #C2C6CF;
			opacity: .4;
			margin-bottom: 20px;
			   padding-top: 2px;
			
				  
		  }	
		}
		form{
			width: 380px;
			margin: 0 auto;
			font-family: arial;
			font-size: 16px;
		}
		.container{
			width: 380px;
			margin: 0 auto;//box-shadow: 2px 2px 5px #eee;
			padding: 30px;
			margin-top: 200px;
			background:#FFFFFF;
			opacity: .4;
			padding-bottom: 50px;
			
		}
		body{
			background: url(image/bg.jpg);
			background-size: cover;
		}
		
		.error{
		//background-color: #FAA;
		border:1px solid #FAA;
		padding: 5px 10px;
			width: 350px;
			margin: 0 auto;
			border-radius: 2px;
			text-transform: capitalize;
			font-family: arial;
			color: red;
			margin-bottom: 20px;
	}
	</style>
</head>

<body>
	
	<div class="container">
		<?php
		   if(isset($_POST['submit']))
			   if($iserror)
				 echo "<div class='error'>{$errorMsg}</div>";
		
		?>
	<form method="post">
		<label>UserName</label>
		<input type="text" name="username">
		<label>Password</label>
		<input type="password" name="password">
		<label></label>
		<input type="submit" name="submit" value="Login" class="btn"><input type="reset" value="Reset" class="btn">
	</form>
	</div>	   
</body>
</html>