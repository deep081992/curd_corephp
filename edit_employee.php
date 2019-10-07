<?php 
if(isset($_REQUEST['key']))
{
	include("connect.php");
	$key=$_REQUEST['key'];
	$res=mysqli_query($con,"select *from employee where id=$key");
	if(mysqli_num_rows($res)==1)
	{
		$row=mysqli_fetch_assoc($res);
		//print_r($row);
	}
	else
	{
		exit("Sorry $key is not found");
	}
	
	?>
		<html>
	<head>
		<title>CRUD Operation - Edit Employee</title> 
		<link href='css/bootstrap.min.css' rel='stylesheet'>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
			<ul class="nav navbar-nav">
				<li><a href="add_employee.php">Add Employee</a></li>
				<li><a href="view_employees.php">View Employees</a></li>
			</ul>
			</nav>
		
			<h1>CRUD - Edit Employee</h1>
			<?php 
			
			if(isset($_COOKIE['success']))
			{
				echo "<p class='alert alert-success'>".$_COOKIE['success']."</p>";
			}
			
			if(isset($_POST['submit']))
			{
				$name=(isset($_POST['ename']))?$_POST['ename']:"";
				$sal=(isset($_POST['salary']))?$_POST['salary']:"";
				$email=(isset($_POST['email']))?$_POST['email']:"";
				$mobile=(isset($_POST['mobile']))?$_POST['mobile']:"";
				$city=(isset($_POST['city']))?$_POST['city']:"";
				$address=(isset($_POST['address']))?$_POST['address']:"";
				
				
				
				mysqli_query($con,"update employee set
				ename='$name',
				salary='$sal',
				email='$email',
				mobile='$mobile',
				city='$city',
				address='$address' where id=$key");
				
				if(mysqli_affected_rows($con)==1)
				{
					setcookie("success","Employee Updated Successfully",time()+2);
					header("Location:edit_employee.php?key=$key");
				}
				else
				{
					echo "<p>Sorry! Unable to UPdate a record</p>";
				}
				
			}
			?>
			
		<form method="POST" action="" onsubmit="return validate()">
			<table class="table">
				<tr>
					<td>Salary</td>
					<td><input  class="form-control" type="text" name="salary" id="salary" value="<?php echo $row['salary'];?>"></td>
				</tr>
				<tr>
					<td>Emp Name</td>
					<td><input value="<?php echo $row['ename'];?>" class="form-control" type="text" name="ename" id="ename"></td>
				</tr>
				<tr>
					<td>Emp Email</td>
					<td><input  value="<?php echo $row['email'];?>" class="form-control" type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Emp Mobile</td>
					<td><input  value="<?php echo $row['mobile'];?>" class="form-control" type="text" name="mobile" id="mobile"></td>
				</tr>
				<tr>
					<td>Emp City</td>
					<td><input  value="<?php echo $row['city'];?>" class="form-control" type="text" name="city" id="city"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea  class="form-control" name="address" id="address"><?php echo $row['address'] ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update Employee" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
		</div>
		<script>
			function validate()
			{
				if(document.getElementById("salary").value=="")
				{
					alert("Enter Salary");
					return false;
				}
				else
				{
					var sal=document.getElementById("salary").value;
					if(isNaN(sal))
					{
						alert("Enter Valid Salary");
						return false;
					}
					
				}
				//email validation
				
				//mobile validation
			}
		</script>
	</body>
</html>


	<?php
}
else
{
	echo "Sorry! Unable to Edit";
}
?>