<?php

include "config.php";
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$id = $_SESSION['id'];
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
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">SUFLIX</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="user_payments.php">Return</a></li>

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
                <h2 style="text-align:center">⠀⠀⠀Payment Insertion⠀⠀⠀</h2>
                <br>
                <form action="insertpayment.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control"  id="Payment_id" name="paymentcard_fullname" value="" placeholder="Full Name" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <p>
                        Please Select Card Type
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Payment_id" name="paymentcard_type" value="Debit Card" checked>
                        <label class="form-check-label" for="paymentcard_type">
                            Debit Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Payment_id" name="paymentcard_type" value="Credit Card">
                        <label class="form-check-label" for="paymentcard_type">
                            Credit Card
                        </label>
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Payment_id" name="paymentcard_number" placeholder="Card Number" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="Payment_id" name="paymentcard_enddate" placeholder="Card End Date" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="Payment_id" name="paymentcard_cvv" placeholder="CVV" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn box-insert-color btn-block" id="_submit" name="_submit" value="Insert Payment" />
                        </div>
                        <br> <br> <br> <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
</html>


<?php
if (!empty($_POST['paymentcard_fullname'])){
    $paymentcard_enddate = $_POST['paymentcard_enddate'];
    $paymentcard_type = $_POST['paymentcard_type'];
    $paymentcard_number = $_POST['paymentcard_number'];
    $paymentcard_fullname = $_POST['paymentcard_fullname'];
    $paymentcard_cvv = $_POST['paymentcard_cvv'];

    $sql_statement = "INSERT INTO Payment (paymentcard_enddate, paymentcard_type, 
        paymentcard_number, paymentcard_fullname, paymentcard_cvv) 
    VALUES ('$paymentcard_enddate','$paymentcard_type', '$paymentcard_number', 
        '$paymentcard_fullname', '$paymentcard_cvv')";

    $result = mysqli_query($db, $sql_statement);
    if($result != ""){
        $sql_statement_second = "SELECT Payment_id FROM Payment WHERE paymentcard_number='$paymentcard_number' ";

        $result_second = mysqli_query($db, $sql_statement_second);
        while ($row = $result_second->fetch_assoc()) {
            if($row['Payment_id'] != ""){
                global $payment_id; $payment_id  = $row['Payment_id'];
            }

        }
        if($result_second != ""){
            $p_id = $GLOBALS['payment_id'];
            $sql_statement_third = "INSERT INTO Does (payment_id, id) VALUES ('$p_id','$id')";
            $result_third= mysqli_query($db, $sql_statement_third);

            //echo "<script> window.location.assign('user_payments.php'); </script>";
        }
        else{
            echo "Check the problem you cannot find the relevant information";
        }



    }
}


?>

