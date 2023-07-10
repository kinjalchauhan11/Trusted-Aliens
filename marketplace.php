<?php
require("DB_conn.php");
$q = "SELECT * FROM marketplace";
$r = mysqli_query($conn, $q);
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous" />
    <script defer src="demo.js"></script>
</head>
<body>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <a href="home.php"><img src="images/logo.jpg" class="img-responsive" alt="Company Logo Image" width="100" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="top-nav">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul>

                                <li><a href="home.php">Home</a></li>
                                <li><a href="addproduct.html">Add Product</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-main marketplace">
        <div class="container">
            <div class="row">
            <?php foreach ($r as $row) : ?>
                <div class="col-sm-4">
                    <div class="hovereffect text-center">
                    <img src="display_image.php?id=<?=$row['Product_ID'] ?>" alt="Image">
                        <div class="book-text">
                            <p><?= $row['Product_name'] ?></p>
                            <span><?= $row['Username'] ?></span>
                            <label><?= $row['Product_price'] ?></label>
                        </div>
                        <div class="overlay">
                            <a href="tel:<?= $row['Contact_number'] ?>" class="btn2">Contact</a><a href="tel:<?= $row['Contact_number'] ?>" class="btn1"><?= $row['Contact_number'] ?></a>
                            <p><?= $row['Username'] ?></p>
                            <span><?= $row['Product_price'] ?></span>
                        </div>
                    </div>
                </div>
                 <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
