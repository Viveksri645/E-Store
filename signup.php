<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>sign up</title>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 mt-5">
            <img src="https://sujanpatel.com/wp-content/uploads/2016/10/pic15.png" class="img-responsive" alt="image">
            </div>

            <div class="col-sm-12 col-md-5 offset-2 mt-5">
                <h2>SIGN UP</h2>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email-Id</label>
                        <input class="form-control" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characternumber@character.character">
                    </div>

                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input class="form-control" type="password" name="pass">
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input class="form-control" type="number" name="contact" pattern=".{10,}" title="contact should be pf length 10">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city">
                    </div>

                    <div class="form-group">
                        <label for="add">Address</label>
                        <textarea class="form-control"name="add" ></textarea>
                    </div>

                    <button class="btn btn-primary mb-2">submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>