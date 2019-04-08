<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>New Firm</title>
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
                        <a class="nav-link text-white" href="./firms.php">Enter/edit firm</a>
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



	<div class="container mt-3">
		<div class="row justify-content-center mb-4">
			<h2>Create new firm:</h2>
		</div>
		<div class="row justify-content-center">
			<form style="" method="post" action="./crudFirm.php" role="form" class="col-8">
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Firm name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="firm_name" value="" placeholder="Enter name..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="shef" class="col-sm-2 col-form-label">Shef</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="shef" name="firm_shef" placeholder="Enter shef..." value="" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label">Address</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="address" name="firm_address" placeholder="Enter address..." value="" required>
					</div>
				</div>

				<button type="submit" name="submit_create" class="btn btn-dark btn-block">Create</button>
			</form>
		</div>
	</div>

</body>

</html>