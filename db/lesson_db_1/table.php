<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-bordered table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>username</th>
							<th>email</th>
							<th>mobile</th>
							<th>Registration</th>
							<th>department</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$conn = new mysqli('localhost', 'root', '', 'focus');
						$select = "SELECT * FROM doctors";
						$query = $conn->query($select);
						while ($doctor = $query->fetch_assoc()) {
						?>
							<tr>
								<td><?= $doctor['id'] ?></td>
								<td><?= $doctor['username'] ?></td>
								<td><?= $doctor['email'] ?></td>
								<td><?= $doctor['mobile'] ?></td>
								<td><?= $doctor['registered_at'] ?></td>
								<td><?= $doctor['dep_id'] ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>