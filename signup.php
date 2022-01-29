<?php

include "config.php";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="login.css" rel="stylesheet" />
</head>
<style>
    .box-color{
        background-color:white;
        margin-top: 10rem;
    }
    .box-insert-color{
        background-color:#4D4D56;
        color: white;
        opacity:25 ;
        margin-top: 10rem;
        margin-left: 1rem;


    }
    .box-insert-btn-color{
        background-color: white;
        justify-content: center;
        margin-left: 20rem;
    }
    .transparent-style{

        background-color: darkblue;
        opacity: .4;

    }


</style>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Return</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="custom container-sm d-flex align-content-center justify-content-center opacity-75">
        <div class="row box-insert-color">
            <div class="col mt-5 col-xs-12 col-md-12 col-lg-12">
                <h1 style="text-align:center; color:darkblue;font-weight: bold;">⠀⠀SUFLIX⠀⠀</h1>
                <h2 style="text-align:center; margin-left: 9rem">⠀⠀Sign Up⠀⠀</h2>
                <br>
                <form action="signup.php" method="POST">
                    <div class="row-sm-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fullname">Fullname</label>
                                <input type="text" class="form-control"  id="id" name="fullname" value="" placeholder="Full Name" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control"  id="id" name="username" value="" placeholder="Username" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row-cols-8">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class ="form-control"  id= "id" name = "password" value="" placeholder="Password" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control"  id="id" name="phone_number" value="" placeholder="" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row-cols-8">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" class="form-control"  id="id" name="birth_date" value="" placeholder="DD/MM/YYYY" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <label for="country">Gender</label>
                            <select class="form-control" id="id" name="sex">
                                <option selected>...</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                            <label for="country">Country</label>
                            <select class="form-control" id="id" name="country">
                                <option selected>...</option>
                                <option>Turkey</option>
                                <option>United States of America(USA)</option>
                                <option>United Kingdom(UK)</option>
                                <option>Netherlands</option>
                                <option>Italy</option>
                                <option>Spain</option>
                                <option>Russia</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Belgium</option>
                                <option>New Zealand</option>
                                <option>Portugal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-cols-8">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="category_liked_one">Please choose your first category preference:</label>
                                <select class="form-control" id="id" name="category_liked_one">
                                    <option selected>...</option>
                                    <option>Action</option>
                                    <option>Adventure</option>
                                    <option>Animation</option>
                                    <option>Comedy</option>
                                    <option>Drama</option>
                                    <option>Historical</option>
                                    <option>Fantasy</option>
                                    <option>Science-Fiction</option>
                                    <option>Horror</option>
                                    <option>Thriller</option>
                                    <option>Western</option>
                                    <option>Documentary</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="category_liked_two">Please choose your your second category preference:</label>
                                <select class="form-control" id="id" name="category_liked_two">
                                    <option selected>...</option>
                                    <option>Action</option>
                                    <option>Adventure</option>
                                    <option>Animation</option>
                                    <option>Comedy</option>
                                    <option>Drama</option>
                                    <option>Historical</option>
                                    <option>Fantasy</option>
                                    <option>Science-Fiction</option>
                                    <option>Horror</option>
                                    <option>Thriller</option>
                                    <option>Western</option>
                                    <option>Documentary</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn box-insert-btn-color btn-lg" id="_submit" name="_submit" value="LOGIN" />
                        </div>
                        <br> <br> <br> <br>
                    </div>
                </form>
            </div>
        </div>
    </div>


</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

<?php
if (!empty($_POST['fullname']) and !empty($_POST['username'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $birth_date = $_POST['birth_date'];
    $sex = $_POST['sex'];
    $zero = 0;
    $country = $_POST['country'];
    $category_liked_one = $_POST['category_liked_one'];
    $category_liked_two = $_POST['category_liked_two'];
    $sql_statement_first = "INSERT INTO Users (fullname , password) VALUES ('$fullname','$password')";
    $result_first = mysqli_query($db, $sql_statement_first);

    $sql_statement_second = "INSERT INTO Customer (username, sex, phone_number, birth_date, country, category_liked_one, category_liked_two) VALUES ('$username','$sex','$phone_number','$birth_date','$country','$category_liked_one','$category_liked_two')";
    $result_second = mysqli_query($db, $sql_statement_second);

    $sql_statement_third = "SELECT id FROM Users WHERE fullname='$fullname'";
    $result_third = mysqli_query($db, $sql_statement_third);
    while ($row = $result_third->fetch_assoc()) {
        global $temp_id; $temp_id = $row['id']; // Print a single column data

    }
    session_start();
    $_SESSION['temp_id'] = $GLOBALS['temp_id'];
    $temp_id= $_SESSION['temp_id'];

    $sql_statement_fourth = "INSERT INTO Shopping_Cart (cart_id, total_amount, no_of_movies) VALUES ('$temp_id','$zero','$zero')";
    $result_fourth = mysqli_query($db, $sql_statement_fourth);
    $sql_statement_fourth = "INSERT INTO Has (cart_id, id) VALUES ('$temp_id','$temp_id')";
    $result_fourth = mysqli_query($db, $sql_statement_fourth);
    if($result_first != "" and $result_second != "" and $result_third != ""){
        echo "Successfully inserted with the code: ";
        echo "<script> window.location.assign('login.php'); </script>";
    }

}
?>
