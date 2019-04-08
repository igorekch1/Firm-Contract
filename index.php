<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mainpage</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
		.background-main {
            width: 100%;
            height: 92.5vh;
            background-image: url("./assets/db.jpg");
            background-size: cover;
        }
        
        h1 {
            position: absolute;
            top: 40%;
            left: 50%;
            margin: -20px 0 0 -120px;
            color: #fff;
            letter-spacing: .1em;
            text-transform: capitalize;
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
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="./firms.php">Enter/edit firm</a>
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
    <div class="background-main">
    </div>
</body>

</html>