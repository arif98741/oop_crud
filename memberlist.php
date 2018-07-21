<?php include('inc/header.php'); ?>

	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		    <li class="breadcrumb-item"><a href="memberlist.php">Member</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Member List</li>
		    
		  </ol>
		</nav>
		<table id="dataTable" style="width: 100%; ">
			<thead>
				<tr>
					<th>Serial</th>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Address</th>
					<th>Designtaion</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Ariful Islam</td>
					<td>arifsofg</td>
					<td>arifsofg@gmail.com</td>
					<td>Elenga Tangail</td>
					<td>General Member</td>
					<td><a href="#" class="btn btn-primary">Edit</a></td>
				</tr>
			</tbody>
		</table>
	</div>



<?php include('inc/footer.php'); ?>