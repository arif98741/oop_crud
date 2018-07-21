<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP OOP CRUD</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/datatables.net-dt/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
	<!-- navbar start -->	

	<nav class="navbar navbar-expand-lg navbar-light bg-red nav-background-color">
	  <a class="navbar-brand" href="#">PHP OOP CRUD</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>

	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Member
	        </a>
	        <div class="dropdown-menu nav-background-color" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addmember.html">Add Member</a>
	          <a class="dropdown-item" href="memberlist.html">Member List</a>
	        </div>
	      </li>
	     
	      <li class="nav-item">
	        <a class="nav-link" href="#">Login</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#">Registration</a>
	      </li>


	    </ul>
	    
	  </div>
	</nav> 
	<!-- navbar end -->

	<!--container-->
	
	
	<div class="container mt-4" style="width: 45%; margin: 0 auto;">
		
		<h2>Login</h2>	
		<form method="post" action="index.php">
		  
			  	<div class="md-3 col-sm-12">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
				  </div>
				  <d

				   <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				<button class="btn btn-success mt-2">Login</button>
				<p class="alert alert-warning mt-1">Username and Password Not matched</p>
			  </div>


		</form>
		
	</div>





	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="asset/js/main.js"></script>
</body>
</html>