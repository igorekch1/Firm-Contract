<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search firms</title>
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
                    <li class="nav-item active">
                        <a class="nav-link text-white" href='#'>Search firm</a>
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

    <div class="container">
        <div class="row justify-content-center mt-5">
            <form method='post' class='col-4'>
                <div class="form-group">
                    <label for="firm-select" style="font-size: 20px; font-weight: 500">Choose a letter to view firms</label>
                    <select multiple class="form-control" id="firm-select" name='firm_letter'>
                        <?php
                            require("./connect.php");
                            
                            $query = "SELECT DISTINCT LEFT(name,1) AS one FROM firm ORDER BY name";
                            
                            $result = mysqli_query($conn, $query);
                            
                            while($row = mysqli_fetch_array($result)) {
                                echo "<option value='".$row['one']."'>".$row['one']."</option>";
                            }    
                        ?>

                    </select>
                </div>
                <button type='submit' class='btn btn-dark btn-block' name='submit_search_firms'>Show</button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
		<div class="row justify-content-center mt-5">
			<div class="col-8">

                        <?php
                            require('./connect.php');
                            
                            if(isset($_POST["submit_search_firms"])) {
                                
                                echo "<table class='table table-striped table-dark'>
                                    <thead>
                                        <tr>
                                            <th scope=col>Name</th>
                                            <th scope=col>Shef</th>
                                            <th scope=col>Address</th>
                                        </tr>
                                    </thead>
                                <tbody>";
                                
                                $letter = $_POST["firm_letter"];
                                $query = "SELECT * FROM firm WHERE name LIKE '".$letter."%'"; 
                                
                                $res = mysqli_query($conn, $query);
                                
                                while($row = mysqli_fetch_array($res)) {
                                    echo "<tr><form method='post' action='./searchcontracts.php'>
                                        <td>".$row['name']."</td>
                                        <td>".$row['shef']."</td>
                                        <td>".$row['address']."</td> 
                                        <td><input type=hidden name='firm_id' value='".$row['id_firm']."'></td>
                                        <td><button type='submit' class='btn btn-light' name='show_contracts'>Show contracts</button></td>
                                    </form></tr>";
                                } 
                            }

                            mysqli_close($conn);
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>