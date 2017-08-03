<?php
$name=$_POST['name'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$repasswd=$_POST['repasswd'];
$gender=$_POST['details_gender'];
$dob=$_POST['details_DOB'];
$phone=$_POST['contact_tel'];
$address=$_POST['contact_address'];
$country=$_POST['details_country'];

if ($name==""||$email==""||$passwd==""||$repasswd==""||$gender==""||$dob==""||$phone==""||$address==""||$country=="")
{	
	echo "Please fill all the detail....!!!!!!";
	echo "try again <u><a href='index.php'>click here</a></u>";


}
else
{
	if ($passwd==$repasswd)
	{
		mysql_connect("localhost","root","");
		mysql_select_db("irtbs");
	
		$query="INSERT INTO userdetail VALUES ('$name', '$email', '$passwd', '$gender', '$dob', '$phone', '$address', '$country')";
		mysql_query($query);
		echo "You have successfully sign up";
	}
	else
	{
		echo "Please Enter correct password<br>";
		echo "try again <u><a href='index.php'>click here</a></u>";
		
	}
}
?>