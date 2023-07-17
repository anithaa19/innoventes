

<?php
	include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Display data</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
</head>
<body class="container my-4">

	<div class="list_users_wrapper">
		<div class="title_wrapper d-flex ">
			<h3>User List</h3>
			<button class="btn btn-primary add_user" data-toggle="modal" data-target="#add_user_form">Add User</button>
		</div>
		<table class="table table-responsive">
				<tr>
					<th>User ID</th>
					<th>Name</th>
					<th>Email ID</th>
					<th>Contact Number</th>
					<th>District</th>
					<th>State</th>
					<th>Country</th>
					<th>Action</th>
				</tr>
				<?php foreach($resultData as $key => $value ){  ?>
					
				<tr>
					
						<td><?php echo $value['id']; ?> </td>
						<td><?php echo $value['name']; ?> </td>
						<td><?php echo $value['email']; ?> </td>
						<td><?php echo $value['contact_number']; ?></td>
						<td><?php echo $value['district']; ?></td>
						<td><?php echo $value['state']; ?></td>
						<td><?php echo $value['country']; ?></td>
						<td> 
							<a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a>
						</td>
					
				</tr>
				<?php } ?>
		</table>
	</div>

	<?php include "newuser.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
	<script src="assets/js/script.js" ></script>
</body>
</html>