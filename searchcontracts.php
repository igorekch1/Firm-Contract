<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search contracts</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
		body {
            background-color: rgb(88,88,88);
            color: #fff;
		}

        label {
            color: #000;
        }

        form {
            background-color: rgb(88,88,88);
        }
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo01">
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
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./contracts.php">Enter/edit contract</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Search contract</a>
                    </li>
                </ul>
            </div>
        </div>    
    </nav>

    <div class="container-fluid">
		<div class="row mt-3 justify-content-center">
            <form class="my-2 my-lg-0 mr-4 col-8" method='POST'>
                <button id="btn-toggle" class="btn btn-light" type="button" data-toggle="collapse" data-target="#myCollapsible" aria-expanded="false" aria-controls="myCollapsible">
                    Search contract
                </button>
                <div class="collapse mt-4" id="myCollapsible">
                    <div class="card card-body">
                        <div class="form-group row">
                            <label for="inputNumberd" class="col-sm-2 col-form-label">Numberd</label>
                            <div class="col-sm-10">
                                <input id="inputNumberd" class="form-control mr-sm-2" type="search" placeholder="Search by numberd..." aria-label="Search" name="search_contract_numberd">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNamed" class="col-sm-2 col-form-label">Named</label>
                            <div class="col-sm-10">
                                <input id="inputNamed" class="form-control mr-sm-2" type="search" placeholder="Search by named..." aria-label="Search" name="search_contract_named">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDatestart" class="col-sm-2 col-form-label">Date start</label>
                            <div class="col-sm-10">
                            <div class="row">
                                <div class="col">
                                    <input id="inputDatestartfrom" class="form-control mr-sm-2" type="date" placeholder="Search by datestart..." aria-label="Search" name="search_contract_datestart_from">
                                </div>
                                <div class="col">
                                    <input id="inputDatestartto" class="form-control mr-sm-2" type="date" placeholder="Search by datestart..." aria-label="Search" name="search_contract_datestart_to">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDateend" class="col-sm-2 col-form-label">Date end</label>
                            <div class="col-sm-10">
                            <div class="row">
                                <div class="col">
                                    <input id="inputDateendfrom" class="form-control mr-sm-2" type="date" placeholder="Search by named..." aria-label="Search" name="search_contract_dateend_from">
                                </div>
                                <div class="col">
                                    <input id="inputDateendto" class="form-control mr-sm-2" type="date" placeholder="Search by named..." aria-label="Search" name="search_contract_dateend_to">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSumd" class="col-sm-2 col-form-label">Sumd</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col">
                                        <input id="inputSumdfrom" class="form-control" type="number" placeholder="From" aria-label="Search" name="search_contract_sumd_from">
                                    </div>
                                    <div class="col">
                                        <input id="inputSumdto" class="form-control" type="number" placeholder="To" aria-label="Search" name="search_contract_sumd_to">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAvans" class="col-sm-2 col-form-label">Avans</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col">
                                        <input id="inputAvansfrom" class="form-control mr-sm-2" type="number" placeholder="From" aria-label="Search" name="search_contract_avans_from">
                                    </div>
                                    <div class="col">
                                        <input id="inputAvansto" class="form-control mr-sm-2" type="number" placeholder="To" aria-label="Search" name="search_contract_avans_to">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0 col-2 offset-5" type="submit" name="submit_search">Search</button>
                    </div>
                </div>    
            </form>
        </div>
        <div class="row justify-content-center mt-5">
			<div class="col-8">
                <table class='table table-striped table-dark'>
                    <thead>
                        <tr>
                            <th scope=col>Firm name</th>
                            <th scope=col>Numberd</th>
                            <th scope=col>Named</th>
                            <th scope=col>Sumd</th>
                            <th scope=col>Date Start</th>
                            <th scope=col>Date End</th>
                            <th scope=col>Avans</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            require('./connection/pdoConnection.php');
                            
                            if(isset($_POST['submit_search'])) {
                                            
                                $dataStartFrom = trim($_POST['search_contract_datestart_from']);
                                $dataStartTo = trim($_POST['search_contract_datestart_to']);
                                $dataEndFrom = trim($_POST['search_contract_dateend_from']);
                                $dataEndTo = trim($_POST['search_contract_dateend_to']);
                                
                                $sql = "SELECT * FROM dogovor JOIN firm on dogovor.id_firm=firm.id_firm WHERE datastart > ? and datastart < ? and datafinish > ? and datafinish < ?";
                                
                                $q = $dbh->prepare($sql);
                                $q->execute(array($dataStartFrom, $dataStartTo, $dataEndFrom, $dataEndTo));
                                
                                while($res=$q->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>
                                        <td>".$res['name']."</td>
                                        <td>".$res['numberd']."</td>
                                        <td>".$res['named']."</td> 
                                        <td>".$res['sumd']."</td>
                                        <td>".$res['datastart']."</td>
                                        <td>".$res['datafinish']."</td> 
                                        <td>".$res['avans']."</td>
                                    </tr>";
                                }
                            }

                            if (isset($_POST['show_contracts'])){

                                $firmId = $_POST['firm_id'];

                                $stmt = $dbh->prepare("SELECT * from dogovor JOIN firm on dogovor.id_firm=firm.id_firm WHERE dogovor.id_firm=?");
                                $stmt->execute([$firmId]);
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>
                                            <td>".$row['name']."</td>
                                            <td>".$row['numberd']."</td>
                                            <td>".$row['named']."</td> 
                                            <td>".$row['sumd']."</td>
                                            <td>".$row['datastart']."</td>
                                            <td>".$row['datafinish']."</td> 
                                            <td>".$row['avans']."</td>
                                        </tr>";
                                } 
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#btn-toggle').on('click', function(e){
            $('#myCollapsible').toggle('show');
        });
    </script>
</body>
</html>