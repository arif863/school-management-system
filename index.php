<?php

$conn= new mysqli('localhost','root','','sms');
$sql = "SELECT * FROM students ";

$result=$conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Business Website</title>

						<!---------------online--------------->

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

						<!------------------offline--------------->
	<link rel="stylesheet" type="text/css" href="resources/stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/stylesheet/style.css">

	<!-- JavaScript Files -->
	<script type="text/javascript" src="resources/script/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="resources/script/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="resources/script/app.js"></script>

</head>
<body>
<!-----------NavigationBar---------->


<section id="promo">
		<div class="">
			<div class="row clearfix">
				<div class="col-md-2">
					<div class="form-group">
						<label class="float-left form-control">Operation</label>
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-info">Class 1 Student List >>></a>
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-secondary">Class 2 Student List >>></a>
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-info">Class 3 Student List >>></a>
			
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-secondary">Class 4 Student List >>></a>
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-info">Class 5 Student List >>></a> 
				 	</div>

					<div class="form-group">
						<label class="float-left form-control">Operation</label>
						<a href="insert.php" class="btn btn-info btn-sm form-control text-left bg-info">Add Students</a>
						<a href="#" class="btn btn-info btn-sm form-control text-left bg-secondary">Extra keys</a>
					</div>
				</div>
	
				<div class="col-md-10">

					<table class="table table-bordered table-sm">
				 	<thead>
				 		<tr class="text-primary"> 
					 		<th>Id</th>
					 		<th>Name</th>
					 		<th>Roll</th>
					 		<th>Reg</th>
					 		<th>Class</th>
					 		<th>Created</th>
					 		<th>Option</th>
				 		</tr>
				 	</thead>
				 	<tbody>
				 		<?php while ($row = $result->fetch_assoc()) { ?>
				 			<tr class="text-primary">
				 				<td><?php echo $row ['id']; ?></td>
				 				<td><?php echo $row ['name']; ?></td>
				 				<td><?php echo $row ['roll']; ?></td>
				 				<td><?php echo $row ['reg']; ?></td>
				 				<td><?php echo $row ['class']; ?></td>
				 				<td><?php echo $row ['created']; ?></td>
					 			<td>
					 				<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">view</a>
					 				<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">edit</a>				 	
					 				<a href="delete.php?id=<?php echo $row['id']; ?>"onclick=" return confirm('Are You Sure?')" class="btn btn-danger btn-sm">delete</a>
					 			</td>
				 			</tr>
				 		<?php } ?>

				 	</tbody>	
 				</table>

				</div>
			</div>
		</div>
	</section>

</body>
</html>