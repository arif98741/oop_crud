<?php include ('inc/header.php'); ?>

	<!--container-->
	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#" class="active">Home</a></li>
		    
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
				<?php 
					$sql = "select * from member";
					$stmt = $db->pdo->query($sql);


					if($stmt){ $i = 0;
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { $i++; ?>
						    <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['designation']; ?></td>
								<td><a href="viewmember.php?action=view&id=<?php echo $row['id']; ?>" class="btn btn-success">V</a>&nbsp;<a href="editmember.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-primary">E</a>&nbsp;<a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger">D</a></td>
							</tr>
					<?php	}
					}
				 ?>
				
			</tbody>
		</table>
	</div>
	<!-- container end -->
<?php include ('inc/footer.php'); ?>