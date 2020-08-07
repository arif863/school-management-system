

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="resources/stylesheet/bootstrap.min.css">

	<!-- JavaScript Files -->
	<script type="text/javascript" src="resources/script/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="resources/script/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="resources/script/app.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<section id="promo">
		<div class="container rasponsiv">
			<div class="row clearfix">

				<div class="col-md-2">
						<div class="form-group">
				    		<label class="float-left text-primary form-control text-left">Instraction</label>
				    		<a href="index.php" class="btn btn-info btn-sm form-control text-left bg-info">Home Page</a>
							<a href="#" class="btn btn-info btn-sm form-control text-left bg-secondary">Extra keys</a>
							<a href="#" class="btn btn-info btn-sm form-control text-left bg-info">Extra keys</a>		 
				  		</div>
				</div>

				<div class="col-md-10 float-center">

				<form action="store.php" method="post">
				  <div class="form-group">
				    <label for="name" class="float-left text-white form-control text-left bg-secondary">Name</label>
				    <input type="text" class="form-control bg-info" name="name" placeholder="Enter name">				 
				  </div>

				  <div class="form-group">
				    <label for="Father" class="float-left text-white form-control text-left bg-secondary">Father Name</label>
				    <input type="text" class="form-control bg-info" name="father_name" placeholder="Enter Father Name">		 
				  </div>

				  <div class="form-group">
				    <label for="mother"class="float-left text-white form-control text-left bg-secondary">Mother Name</label>
				    <input type="text" class="form-control bg-info" name="mother_name" placeholder="Enter Mother Name ">			 
				  </div>

				  <div class="form-group">
				    <label for="address"class="float-left text-white form-control text-left bg-secondary">Address</label>
				    <input type="text" class="form-control bg-info" name="address" placeholder="Enter Address">			
				  </div>

				  <div class="form-group float-left">
				    <label for="roll"class="float-left text-white form-control bg-secondary">Roll</label>
				    <input type="text" class="form-control bg-info" name="roll" placeholder="Enter Your Roll">			
				  </div>

				  <div class="form-group float-left">
				    <label for="reg"class="float-left text-white form-control bg-secondary">Reg</label>
				    <input type="text" class="form-control bg-info" name="reg" placeholder="Enter Your Reg">			
				  </div>

				  <div class="form-group float-left">
				    <label for="class" class="float-left text-white form-control bg-secondary">Class</label>
				    <select id="class" class="bg-info form-control" name="class" placeholder="Your Country">
				    	<option value="">Select Your Class</option> 
				  	    <option value="One">One</option>
				  	    <option value="Two">Two</option>
				  	    <option value="Three">Three</option>
				  	    <option value="Four">Four</option>
				  	    <option value="Five">Five</option>
				  	</select>
				  </div>

				  <div class="form-group float-left">
				    <label for="age" class="float-left text-white form-control bg-secondary">Age</label>
				    <select id="age" class="bg-info form-control" name="age" placeholder="Enter Your Age">
				    	<option value="">Age</option> 
				  	    <option value="05">05</option>
				  	    <option value="06">06</option>
				  	    <option value="07">07</option>
				  	    <option value="08">08</option>
				  	    <option value="09">09</option>
				  	    <option value="10">10</option>
				  	    <option value="11">11</option>
				  	    <option value="12">12</option>
				  	    <option value="13">13</option>
				  	    <option value="14">14</option>
				  	    <option value="15">15</option>
				  	</select>
				  </div>

				  <div class="form-group">
				    <label for="dob"class="float-left text-white form-control bg-secondary">Date of Birth</label>
				    <input type="date" class="form-control bg-info" name="dob" placeholder="Enter Date of Birth">			
				  </div>

				  <button type="submit" class="btn btn-primary form-control bg-primary text-white">Submit</button>

				</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>