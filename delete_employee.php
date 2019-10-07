<?php 
if(isset($_REQUEST['key']))
{
	$key=$_REQUEST['key'];
	include("connect.php");
	mysqli_query($con,"delete from employee where id=$key");
	if(mysqli_affected_rows($con)==1)
	{
		setcookie("success","Records Deleted Successfully",time()+2);
		header("Location:view_employees.php");
	}
}
else
{
	echo "Wrong Place";
}
?>