<html>
	<head>
		<title>CRUD Operation - Add Employee</title> 
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
		
			<h1>CRUD - Add Employee</h1>
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
				
				include("connect.php");
				
				mysqli_query($con,"insert into employee(ename,email,mobile,city,address,salary) values('$name','$email','$mobile','$city','$address','$sal')");
				
				if(mysqli_affected_rows($con)==1)
				{
					setcookie("success","Employee Added Successfully",time()+2);
					header("Location:add_employee.php");
				}
				else
				{
					echo "<p>Sorry! Unable to insert a record</p>";
				}
				
			}
			?>
			
		<form method="POST" action="" onsubmit="return validate()">
			<table class="table">
				<tr>
					<td>Salary</td>
					<td><input class="form-control" type="text" name="salary" id="salary"></td>
				</tr>
				<tr>
					<td>Emp Name</td>
					<td><input class="form-control" type="text" name="ename" id="ename"></td>
				</tr>
				<tr>
					<td>Emp Email</td>
					<td><input class="form-control" type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Emp Mobile</td>
					<td><input class="form-control" type="text" name="mobile" id="mobile"></td>
				</tr>
				<tr>
					<td>Emp City</td>
					<td><input class="form-control" type="text" name="city" id="city"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea  class="form-control" name="address" id="address"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add Employee" class="btn btn-primary"></td>
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

