<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location:Home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Home</title>
</head>

<body>
    <?php
    include("header.php");

    ?>
    <div class="container" id="jumbo">
        <div class="jumbotron">
            <h1>Welcome to our E-stores</h1>
            <p>We have the best mobile phones for you. No need to hunt around, we have all in one place.
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-12 ">
                <figure class="figure">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0W4w8wkK3oFN3xBAEVws1se8cojLsTTVjlA&usqp=CAU" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Samsung</h3>
                            <p>Price Rs.40000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6  box">
                <figure class="figure">
                    <img src="https://www.lg.com/global/lgwing/assets/img/phone_3.png" class="figure-img img-thumbnail img-fluid rounded" width="70%"  alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>LG WING LMF100N</h3>
                            <p>Price Rs.50000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
            <div class="col-md-3 col-sm-6  box">
                <figure class="figure">
                    <img src="https://www.setaswall.com/wp-content/uploads/2019/03/Samsung-Galaxy-A70.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Samsung Galaxy A37</h3>
                            <p>Price Rs.28000.00</p>
                        </center>

                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://digistatement.com/wp-content/uploads/2020/04/rsz_vivo-s6-5g-4.jpg" class="figure-img img-thumbnail img-fluid rounded" width="75%" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Vivo S6</h3>
                            <p>Price Rs.15000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://i01.appmifile.com/webfile/globalimg/in/cms/2C9BB72C-94FB-7AF9-97DC-D21F4331700A.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Redmi 9 Power</h3>
                            <p>Price Rs.10999.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://i02.appmifile.com/767_bbs_en/27/08/2020/07486ce522.png" class="figure-img img-thumbnail img-fluid rounded" width="110%" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Redmi k30 Ultra</h3>
                            <p>Price Rs.18000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41FQEgRHY4L._AC_SY355_.jpg" width="80%"alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Redmi Note 8</h3>
                            <p>Price Rs.15000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://www.pngfind.com/pngs/m/328-3286265_xiaomi-redmi-note-5-details-hd-png-download.png" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Redmi Note 5</h3>
                            <p>Price Rs.13000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://fdn2.gsmarena.com/vv/pics/oppo/oppo-a12-1.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>OPPO A12</h3>
                            <p>Price Rs.13000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://static.toiimg.com/photo/70737428/OPPO-Reno-2F.jpg" class="figure-img img-thumbnail img-fluid rounded" width="75%"alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>OPPO Reno 2F</h3>
                            <p>Price Rs.20000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71crCF%2BogwL._SL1500_.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>OPPO F9 Prism</h3>
                            <p>Price Rs.25000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="https://rukminim1.flixcart.com/image/416/416/knyxqq80/mobile/1/u/e/a53s-5g-cph2321-oppo-original-imag2gwzmunrmur8.jpeg?q=70" class="figure-img img-thumbnail img-fluid rounded" width="60%" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>OPPO A53s</h3>
                            <p>Price Rs.30000.00</p>
                        </center>
                    </figcaption>
                    <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    </div>

                </figure>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>

