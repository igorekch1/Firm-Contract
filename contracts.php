<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contracts</title>
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
                        <a class="nav-link text-muted" href='./searchfirms.php'>Search firm</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Enter/edit contract</a>
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
            <div class="col-2">
				<button type="button" 
						class="btn btn-success btn-block"
						onclick = "window.location.href='./createContract.php'"	
				>
					Create contract
				</button>
			</div>
        </div>
		<div class="row justify-content-center mt-5 pl-5 pr-5">
			<div class="">
				<table class="table table-striped table-dark">
					<caption>All contracts</caption>
					<thead>
						<tr>
							<th scope="col">Firm name</th>
							<th scope="col">Numberd</th>
							<th scope="col">Named</th>
                            <th scope="col">Sumd</th>
							<th scope="col">Date Start</th>
							<th scope="col">Date End</th>
                            <th scope="col">Avans</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require('connect.php');
							
							$queryContract = "SELECT * FROM dogovor WHERE status=1 ORDER BY id_firm DESC";
                            $resultContract = mysqli_query($conn, $queryContract);
                            
							
							while(($row = mysqli_fetch_array($resultContract))){
                                
                                echo "<tr><form method='post' action='./crudContract.php'>
                                    <td style='width:150px;'>
                                        <select class='custom-select' name='firm_id'>";
                                            $queryFirm = "SELECT * FROM firm";
                                            $resultFirm = mysqli_query($conn, $queryFirm);
                                            while($rowFirm = mysqli_fetch_array($resultFirm)){
                                                if($row['id_firm'] == $rowFirm['id_firm']){
                                                    echo "<option value='".$rowFirm['id_firm']."' selected>".$rowFirm['name']."</option>";
                                                }else{
                                                    echo "<option value='".$rowFirm['id_firm']."'>".$rowFirm['name']."</option>";
                                                }
                                            }; 
                                            echo "
                                        </select>
                                    </td>
                                    <td><input class='form-control' type=text name='contract_numberd' placeholder=Numberd value='".$row['numberd']."'></td>
                                    <td><input class='form-control' type=text name='contract_named' placeholder=Named value='".$row['named']."'></td>
                                    <td><input class='form-control' type=number name='contract_sumd' placeholder=Sumd value='".$row['sumd']."'></td>
                                    <td><input class='form-control' type=date name='contract_dataStart' placeholder=DataEnd value='".$row['datastart']."'></td>
                                    <td><input class='form-control' type=date name='contract_dataEnd' placeholder=DataEnd value='".$row['datafinish']."'></td>
                                    <td><input class='form-control' type=number name='contract_avans' placeholder=Avans value='".$row['avans']."'></td>
                                    <input type=hidden name='contract_id' value='".$row['id_d']."'>
               
									<td><button type='submit' class='btn btn-primary' name='submit_edit'>Edit</button></td>
									<td><button type='submit' class='btn btn-danger' name='submit_delete'>Delete</button></td>
								</form></tr>";
								
							}
							?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>