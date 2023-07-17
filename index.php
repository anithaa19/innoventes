

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

				<tr>
					<td>123</td>
					<td>Teja</td>
					<td>anitha@gmail.com</td>
					<td>0976432146</td>
					<td>Andhra</td>
					<td>Andhra</td>
					<td>Andhra</td>
					<td> 
						<a href="localhost/innoventes/delete?id=">Delete</a>
					</td>
				</tr>
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