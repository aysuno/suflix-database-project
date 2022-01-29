<?php
$db = mysqli_connect('localhost','root','','SUFLIX');

include "config.php";
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title> ADMIN USER DELETION </title>
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
            <h2 style="text-align:center">⠀⠀Delete User⠀⠀</h2>
            <br>
            <form action="deleteuser.php" method="POST">

                <select class="form-select" name="id">
                    <?php

                    $sql_command = "SELECT * FROM Users";

                    $myresult = mysqli_query($db, $sql_command);

                    while($id_rows = mysqli_fetch_assoc($myresult))
                    {
                        $id = $id_rows['id'];
                        $name = $id_rows['name'];
                        $password = $id_rows['password'];
                        echo "<option value=$id>" . $name  . " - User ID: " . $id . "</option>";
                    }

                    ?>
                </select>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        <input type="submit" class="btn btn-danger btn-block" id="_submit" name="_submit" value="DELETE USER" />
                    </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
