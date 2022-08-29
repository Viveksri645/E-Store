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
    <?php
    if (isset($_POST['send_email'])) {
        $email = mysqli_real_escape_string($_con, $_POST['email']);
        $select_query = "SELECT count(*) as total FROM users WHERE email= '" . $email . "' ";
        $select_query_result = mysqli_query($_con, $select_query)
            or die(mysqli_error($_con));
        $select_query_rows = mysqli_fetch_array($select_query_result);
        $_select_query1 = "SELECT name FROM users WHERE email= '" . $email . "' ";
        $select_query_result1 = mysqli_query($_con, $_select_query1) or die(mysqli_error($_con));
        $rows = mysqli_fetch_array($select_query_result1);
        if ($select_query_rows['total'] > 0) {
            $username = $rows['name'];
            $subject = "Reset Password";
            $body = "Hi, $username. Click here to activate your account http://localhost/products/recover.php";

            $sender_email = "from: viveksrivastava1202@gmail.com";
            ini_set('SMTP','localhost');
            ini_set('smtp_port','465');
            if(mail($email, $subject, $body, $sender_email)) {
                ini_set('SMTP','localhost');
                ini_set('smtp_port','465');
                $_SESSION['message'] = "check your mail to activate your account $email";
                header("locatio:login.php");
            } else {
                echo ("Email sending failed...");
            }
        } else {
            echo ("username or password is incorrect.");
        }
    } ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 mt-5">
                <img src="https://us.123rf.com/450wm/stuartphoto/stuartphoto1901/stuartphoto190100965/116118634-reset-password-button-to-redo-security-of-pc-new-code-for-securing-computer-3d-illustration.jpg?ver=6" class="img-responsive" alt="image">
            </div>

            <div class="col-sm-12 col-md-5 offset-2 mt-5">
                <h2>Recover Email-Id</h2>
                <form method="POST" action="recover.php">
                    <div class="form-group">
                        <label for="email">Email-Id</label>
                        <input class="form-control" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characternumber@character.character">
                    </div>

                    <button class="btn btn-primary btn-block mb-2" name="send_email">send email</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>