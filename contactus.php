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
    <title>contact us</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="mt-5 mb-2">LIVE SUPPORT</h1>
                <p>
                    <font size="+2" type="arial">24 hours| 7 days a week | 365 days a year LIVE TECHNICAL SUPPORT </font>
                </p>
                <p>It is a long established fact the reader will be distracted by the readable content of the page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of
                    passages of Lorem Ipsum available, but the majority have suffered alternation in some form, by injected humour, or
                    randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum, you need to
                    be sure there isn't anything embarrassing hidden in the middle of text.
                </p>
            </div>
            <div class="col-sm-12 col-md-3">
                <img class="mt-5" src="https://image.shutterstock.com/image-photo/businessman-touching-icon-mobile-phone-260nw-1413408059.jpg" alt="image" height="152px" width="181px">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <h2>CONTACT US</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="add">Address:</label>
                            <input type="text" name="add" class="form-control">
                        </div>
                         
                        <button class="btn btn-primary my-2">submit</button>
                    </form>
                </div>

                <div class="col-sm-12 col-md-5">
                    <h2>COMPANY INFORMATION : </h2>
                    <p>2<sup>nd</sup> floor Quin Tower,</p>
                    <p>Pari Chowk sector 48, </p> 
                    <p>Greater Noida, India</p>
                    <p>Phone No: 0510-2068959 </p>
                    <p>Fax: 0293 000000</p>
                    <p>Email-id: infoe-store1@gmail.com</p>
                    <p>Follow us on : Twitter, Facebook, Instagram</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>