<?php include('inc/header.php'); ?>
<?php
	if (isset($_POST['addmember'])) {
		$msg = $mem->addMember($_POST);
	} else {
		
	}
 ?>

	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		  	
		  	<?php foreach ( $helper->currentPath() as $value): ?>

		    <li class="breadcrumb-item"><a  href="<?php echo $value; ?>"><?php echo ucfirst(str_replace('.php', '', $value)); ?></a></li>
		   
		    <?php endforeach; ?>
		    
		  </ol>
		</nav>
		
		<?php if(isset($msg)) echo $msg; ?>
		<br>
		
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
					<td><a href="#" class="btn btn-primary">E</a></td>
				</tr>
			</tbody>
		</table>
	</div>



<?php include('inc/footer.php'); ?>