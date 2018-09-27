<?php
$conn=mysqli_connect("localhost","root","","definedetails");
if(!$conn)
{
echo mysqli_error();
echo ("CONNECTION ERROR");
}


extract($_POST);
$username=$_POST['user'];
$password=$_POST['pass'];
$sql="SELECT * from users where username='$username' AND password='$password'";
$results=mysqli_query($conn,$sql);

if(mysqli_num_rows($results)==1)
{
	echo("<center>");
	echo("Logged in succesfully");
	echo("<br/><br/>");
	echo("<a href='choose.html'>Click here to continue</a>");
	echo("</center>");
}
else
{
	echo("<center>");
	echo("Login Unsuccesfull");
	echo("<br/><br/>");
	echo("<a href='login.html'>Click Here To try again!</a>");
	echo("<br/><br/>");
	echo("<a href='signup.php'>New User ?</a>");
	echo("</center>");
}
?>





<html>

<style>
body{
	background-color:yellow;
}
</style>






<body>
</body>
</html>
