<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>New Contract</title>
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
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./firms.php">Enter/edit firm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./searchfirms.php">Search firm</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="./contracts.php">Enter/edit contract</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./searchcontracts.php">Search contract</a>
                    </li>
                </ul>
            </div>
        </div>    
    </nav>



	<div class="container mt-3">
		<div class="row justify-content-center mb-4">
			<h2>Create new contract:</h2>
		</div>
		<div class="row justify-content-center">
			<form method="post" action="./crudContract.php" role="form" class="col-8">
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Firm name</label>
					<div class="col-sm-10">
						<select class='custom-select' name="firm_id">";
							<option value="0">Choose a firm</option>
							<?php
								require('connect.php');

								$queryFirm = "SELECT * FROM firm";
								$resultFirm = mysqli_query($conn, $queryFirm);

								while($rowFirm = mysqli_fetch_array($resultFirm)){
									echo "<option value='".$rowFirm['id_firm']."'>".$rowFirm['name']."</option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="numberd" class="col-sm-2 col-form-label">Numberd</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="numberd" name="contract_numberd" placeholder="Enter numberd..." value="" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="named" class="col-sm-2 col-form-label">Named</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="named" name="contract_named" placeholder="Enter named..." value="" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="sumd" class="col-sm-2 col-form-label">Sumd</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="sumd" name="contract_sumd" placeholder="Enter sumd..." value="" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="dataStart" class="col-sm-2 col-form-label">Data start</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="dataStart" name="contract_dataStart" placeholder="Enter data start..." value="" required>
					</div>
				</div>

                <div class="form-group row">
					<label for="dataEnd" class="col-sm-2 col-form-label">Data end</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="dataEnd" name="contract_dataEnd" placeholder="Enter data end..." value="" required>
					</div>
				</div>

                <div class="form-group row">
					<label for="avans" class="col-sm-2 col-form-label">Avans</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="avans" name="contract_avans" placeholder="Enter avans..." value="" required>
					</div>
				</div>

				<button type="submit" name="submit_create" class="btn btn-dark btn-block">Create</button>
			</form>
		</div>
	</div>

</body>

</html>