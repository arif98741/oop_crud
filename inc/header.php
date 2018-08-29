<?php 
	$self_path  = $_SERVER['PHP_SELF'];
	$explode = explode('/', $self_path);
	unset($explode[0]);
	
	function my_autoloader($class) {
    	include 'class/' .$class.'.php';
	}

	spl_autoload_register('my_autoloader');
	include_once('lib/helper/Helper.php');
	$mem = new Member();
	$db  = new Database();
	$helper = new Helper();

	//echo $helper->currentPath();

	
?>
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
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>

	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Member
	        </a>
	        <div class="dropdown-menu nav-background-color" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="addmember.php">Add Member</a>
	          <a class="dropdown-item" href="memberlist.php">Member List</a>
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


