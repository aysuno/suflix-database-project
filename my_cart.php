<?php

include "config.php"; //makes mysql connection

session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$id = $_SESSION['id'];
$cart_id = $_SESSION['id'];
$counter = 0.0;
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="user.css" rel="stylesheet" />
    <style>
        table {
            margin: 2rem auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: white;
            font-max-size: medium;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            padding-top: 4rem;


        }
        h12{
            text-align: center;
            color: white;
            font-size: small;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            margin-top: 120rem;
            padding-left: 40rem;
        }

        td {
            background-color: #4D4D56;
            border: 1px solid white;
        }
        td_white {
            background-color: rgba(0,0,0,0);
            margin-left: 43.20rem;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            color: white;
        }

        td {
            font-weight: lighter;
            color: white;
        }
        btn {

        }
    </style>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">SUFLIX</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a class="nav-link" href="user.php">Return</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <section>
        <h1>My Cart</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>MOVIE NAME</th>
                <th>DIRECTOR</th>
                <th>CATEGORY</th>
                <th>PRICE</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php


            $db = mysqli_connect('localhost','root','','SUFLIX');


            $sql_first = "SELECT * FROM `Movie` LEFT JOIN `Added_To` ON `Movie`.`movie_id` = `Added_To`.`movie_id` WHERE `cart_id` = '$cart_id'" ;
            $result = mysqli_query($db, $sql_first);// LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
                ?>
                <form method="POST">
                    <tr>

                        <!--FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN-->
                        <td><?php echo $rows['movie_name'];?></td>
                        <td><?php echo $rows['director'];?></td>
                        <td><?php echo $rows['main_category'];?></td>
                        <td>$5.00</td>
                        <td><a href="user_cart_deletion.php?movie_id=<?php echo $rows['movie_id']; ?>&cart_id=<?php echo $rows['cart_id']; ?>"><i class="fa fa-trash"></i></a></td>








                    </tr>
                </form>
                <?php
            }
            ?>
        </table>
        <table>
            <tr>

                <th>TOTAL PRICE</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php


            $db = mysqli_connect('localhost','root','','SUFLIX');


            $sql_first = "SELECT * FROM `Added_To` WHERE cart_id = '$cart_id'" ;
            $result = mysqli_query($db, $sql_first);
            while ($row = $result->fetch_assoc()) {
                $counter = $counter +1.00;// Print a single column data

            }// LOOP TILL END OF DATA
            ?>
            <form method="POST">
                <tr>

                    <td>$<?php echo $counter * 5.00?>.00 </td>

                </tr>
            </form>
        </table>
        <table>
            <tr>

                <th></th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->

            <form method="POST">
                <tr>

                    <td_white>
                        <div class="btn-group">
                        <a href="checkout.php?cart_id=<?php echo $cart_id; ?>" class="btn btn-success">Checkout</a>
                        </div>
                    </td_white>

                </tr>
            </form>
        </table>

    </section>


</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
</html>



