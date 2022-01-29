<?php

include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Insert Customer </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<style>
    .box-color{
        background-color:white;
    }
    .box-insert-color{
        background-color:darkblue;
        color: white;
    }
</style>
<body style="background-color: #f6f7fb;">

<div class="custom container-fluid d-flex align-items-center justify-content-center">
    <div class="row box-color">
        <div class="col mt-5 col-xs-12 col-md-12 col-lg-12">
            <h1 style="text-align:center; color:darkblue;font-weight: bold;">⠀⠀SUFLIX⠀⠀</h1>
            <h2 style="text-align:center">⠀⠀Customer Insertion⠀⠀</h2>
            <br>
            <form action="insertcustomer.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control"  id="id" name="username" value="" placeholder="Username" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="id" name="sex"  value="" placeholder="Sex" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" id="id" name="phone_number" placeholder="Phone Number" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="id" name="birth_date" placeholder="Birth Date" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="id" name="country" placeholder="Country" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="id" name="category_liked_one" placeholder="Preferred Category One" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="id" name="category_liked_two" placeholder="Preferred Category Two" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="submit" class="btn box-insert-color btn-block" id="_submit" name="_submit" value="Insert Customer" />
                    </div>
                    <br> <br> <br> <br>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (!empty($_POST['username'])){
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];
    $birth_date = $_POST['birth_date'];
    $country = $_POST['country'];
    $category_liked_one = $_POST['category_liked_one'];
    $category_liked_two = $_POST['category_liked_two'];
    $sql_statement = "INSERT INTO Customer (username, sex, phone_number, birth_date, country, category_liked_one, category_liked_two) VALUES ('$username','$sex','$phone_number','$birth_date','$country','$category_liked_one','$category_liked_two')";

    $result = mysqli_query($db, $sql_statement);
    echo "Successfully inserted with the code: " . $result;
}
else
{
    echo "There is missing information! Add process failed.";
}

?>


