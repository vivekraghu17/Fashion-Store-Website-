<?php
extract($_POST);
echo ("WELCOME\n");
echo($username);



echo("<br>");

$conn=mysqli_connect("localhost","root","","definedetails");
if(!$conn)
{
echo mysqli_error();
echo ("CONNECTION ERROR");
}
else
{
echo("User has been created Succesfully");
}



$sql="INSERT INTO users(username,password)values('$username','$password')";
mysqli_query($conn,$sql);





?>