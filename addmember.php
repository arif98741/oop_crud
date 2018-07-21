<?php include ('inc/header.php'); ?>

	<!--container-->

	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		    <li class="breadcrumb-item"><a href="memberlist.php">Member</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Add Member</li>
		  </ol>
		</nav>

		<!-- form for adding member -->
		<form method="post" action="memberlist.php">
		  <div class="row">
			  	<div class="col-md-6">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Username</label>
				    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
				  </div>

				   <div class="form-group">
				    <label for="exampleInputPassword1">Address</label>
				    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
				  </div>


			  </div>


			  <div class="col-md-6">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email Address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
				    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Designation</label>
				    <select name="designation" id="" class="form-control">
				    	<option value="" disabled="" selected="" required>Select Designation</option>
				    	<option value="">Project Manager</option>
				    	<option value="">General Manager</option>
				    	<option value="">Data Entry Operator</option>
				    </select>
				  </div>


			  </div>
		  </div>
		  <div class="row">
		  	<div class="col-md-offset-4 col-md-4">
		  		<button class="btn btn-danger" type="reset">Reset</button>
		  		<button class="btn btn-success" type="submit" name="addmember">Submit</button>
		  	</div>

		  	<div class="col-md-4" id="message">
		  		<p class="alert alert-success">Member Added Successfully</p>
		  	</div>
		  </div>

		</form>
		
	</div>
	<!-- container end -->

<?php include ('inc/footer.php'); ?>