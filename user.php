<?php

include "config.php"; //makes mysql connection
$db = mysqli_connect('localhost','root','','SUFLIX');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SUFLIX</title>
    <link rel="icon" type="image/x-icon" href="assets/main/s.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="user.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">SUFLIX</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="all_movies.php">Movies</a></li>
                <li class="nav-item"><a class="nav-link" href="all_producers.php">Production Companies</a></li>
                <li class="nav-item"><a class="nav-link" href="user_personal_feedbacks.php">My Feedbacks</a></li>
                <li class="nav-item"><a class="nav-link" href="user_orders.php">My Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="user_payments.php">My Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <video controls autoplay loop muted playsinline style="margin-top: 5rem;  width:90rem">
        <source src="assets/videos/Vintage%20Halloween%20Spooky%20Cartoons%20Compilation%20(1%20Hour)%20SPOOK%20FACTOR%207_10.mp4" type="video/mp4">
    </video>

</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
</html>

