<?php

$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="test";
$connect=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($connect)
{
	if(isset($_POST['Submit']))
	{
		$user=$_POST['username'];
		$password=$_POST['password'];
		$sql="insert into teest(username,password) value('$username','$password') ";
		$result=mysqli_query($connect,$sql);
		if($result)
		{
			echo "data success fully enter";
		}
		else
		{
            echo "something went wrong";
		}
	}
}

?>