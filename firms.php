<!DOCTYPE html>
<html>

<head>
	<title>ALl firms</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<style>
		body {
			background-color: rgb(88,88,88);
			color: #fff;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./index.php">Home</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Enter/edit firm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./searchfirms.php">Search firm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./contracts.php">Enter/edit contract</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./searchcontracts.php">Search contract</a>
                    </li>
                </ul>
            </div>
        </div>    
    </nav>

	<div class="container-fluid">
		<div class="row justify-content-center mt-5">
			<div class="col-8">
				<table class="table table-striped table-dark">
					<caption>All firms</caption>
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Shef</th>
							<th scope="col">Address</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require('connect.php');
							
							$query = "SELECT * FROM firm WHERE status=1";
							$result = mysqli_query($conn, $query);
							
							while($row = mysqli_fetch_array($result)){
								
								echo "<tr><form method='post' action='./crudFirm.php'>
									<td><input class='form-control' type=text  name='firm_name' placeholder=Name value='".$row['name']."'></td>
									<td><input class='form-control' type=text name='firm_shef' placeholder=Surname value='".$row['shef']."'></td>
									<td><input class='form-control' type=text name='firm_address' placeholder=Email value='".$row['address']."'></td>
									<input type=hidden name='firm_id' value='".$row['id_firm']."'>
									<td><button type='submit' class='btn btn-primary' name='submit_edit'>Edit</button></td>
									<td><button type='submit' class='btn btn-danger' name='submit_delete'>Delete</button></td>
								</form></tr>";
								
							}
							?>
					</tbody>
				</table>
			</div>

			<div class="col-2">
				<button type="button" 
						class="btn btn-success btn-block"
						onclick = "window.location.href='./createfirm.php'"	
				>
					Create firm
				</button>
			</div>
		</div>
	</div>
</body>

</html>