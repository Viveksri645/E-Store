<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title></title>
</head>

<body>
    <div class="navbar navbar-expand-md navbar-light bg-light ">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">E-stores</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsiblenavbar">
            <ul class="navbar-nav ml-auto">
            <?php
                    if (isset($_SESSION['email'])) { ?> <li ><a href="cart.php" class="nav-link"><span><img src="cart4.svg" alt="cart image" height="20" width="20"></span> Cart </a></li>
                        <li class="nav-item"><a href="settings.php" class="nav-link"><span><img src="gear.svg" alt="settings image" height="20" width="20"></span> Settings</a></li>
                        <li class="nav-item"><a href="logout_script.php" class="nav-link"><span><img src="box-arrow-left.svg" alt="logout image" height="20" width="20"></span> Logout</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a href="signup.php" class="nav-link"><img src="person-fill.svg" alt="person image" width="20" height="20"> Sign Up</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link"><img src="box-arrow-in-right.svg" alt="image" width="20" height="20"> Login</a></li>
                        <li class="nav-item"><a href="aboutus.php" class="nav-link"> <i class="fas fa-bars"></i>About us</a></li>
                        <li class="nav-item"><a href="contactus.php" class="nav-link"><i class='fas fa-mobile-alt'></i>Contact us</a></li>
                    <?php }
            ?>
            </ul>
        </div>
    </div>
    </div>
</body>

</html>