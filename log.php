<?php
	session_start();
	$email=$_POST['email'];
	$passwd=$_POST['passwd'];
	if ($email == "" || $passwd == "")
	{
		echo "Please fill the detail correctly<br>";
		echo "try again <u><a href='index.php'>click here</a></u>";
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("irtbs");
		
		$query = "SELECT * FROM userdetail WHERE (email = '$email' AND passwd = '$passwd')";
		$result = mysql_query($query);
		$con = mysql_fetch_array($result);

		if ($con != 0)
		{
			$_SESSION['name'] = $con[0];
			$_SESSION['email'] = $email;
			header("location:index.php");
		}
		else
		{
			echo "Please enter correct email and password<br>";
			echo "try again <u><a href='index.php'>click here</a></u>";
		}
	}
?>