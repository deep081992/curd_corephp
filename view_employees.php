<html>
	<head>
		<title>CRUD Operation - View Employees</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		<nav class="navbar navbar-default">
			<ul class='nav navbar-nav'>
				<li><a href="add_employee.php">Add Employee</a></li>
				<li><a href="view_employees.php">View Employees</a></li>
			</ul>
		</nav>
		<h1>View Employees</h1>
		
		
		<?php 
		if(isset($_COOKIE['success']))
		{
			echo "<p class='alert alert-danger'>".$_COOKIE['success']."</p>";
		}
		
		
		include("connect.php");
		
		$res=mysqli_query($con,"select *from employee");
		if(mysqli_num_rows($res)>0)
		{
			?>
				<table class="table">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Salary</th>
				<th>City</th>
				<th>Address</th>
				<th>Join Date</th>
				<th>Action</th>
			</tr>
			<?php 
			while($row=mysqli_fetch_assoc($res))
			{
				?>
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['ename']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['salary']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td>
					<a href="edit_employee.php?key=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
					<a href="javascript:void(0)" onclick="deleteRecord(<?php echo $row['id']?>)" class="btn btn-danger">Delete</a>
				</td>
			</tr>
				<?php
			}
			?>
		</table>
			<?php
		}
		else
		{
			echo "<p class='alert alert-danger'>No Records Found</p>";
		}
		?>
		
		
		
		</div>
		<script>
			function deleteRecord(id)
			{
				var c=confirm("Do You want to delete?");
				if(c==true)
				{
					window.location="delete_employee.php?key="+id
				}
			}
		</script>
	</body>
</html>