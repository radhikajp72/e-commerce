<?php
//session_start();
?>
<?php
	/*if($_SESSION['myuser'])
{
	$thisUser = $_SESSION['myuser'];
    echo "<div class='home'> Hello ".$thisUser." </div>";
}
else
{
	header('Location: loginform.php');
}
*/
if($_COOKIE['myuser'])
{
	$thisUser = $_COOKIE['myuser'];
    echo "<div class='home'> Hello ".$thisUser." </div>";
}
else
{
	header('Location: loginform.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		body{background: url(image/bg2.jpg) no-repeat;
		    background-size: cover;}
		.home{
			
			
			font-size: 50px;
			font-family: arial;
			color: white;
			text-align: center;
			opacity:.8;
			text-transform: uppercase;
			margin-top: 300px;
			
			
		}
	</style>
</head>

<body>
	



	
</body>
</html>