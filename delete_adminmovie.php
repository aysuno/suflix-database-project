<?php
include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

?>

<html>
<head>
    <meta charset="UTF-8" />
    <title> ADMIN MOVIE DELETION </title>
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
            <h2 style="text-align:center">⠀⠀Delete Movie⠀⠀</h2>
            <br>
            <form action="deletemovie.php" method="POST">

                <select class="form-select" name="movie_id">
                    <?php

                    $sql_command = "SELECT movie_id, movie_name, movie_description
                        writer, director, stars, release_year, running_time, 
                        main_category, sub_category_one, sub_category_two FROM Movie";

                    $myresult = mysqli_query($db, $sql_command);

                    while($id_rows = mysqli_fetch_assoc($myresult))
                    {
                        $movie_id = $id_rows['movie_id'];
                        $movie_name = $id_rows['movie_name'];
                        $movie_description = $id_rows['movie_description'];
                        $writer = $id_rows['writer'];
                        $director = $id_rows['director'];
                        $stars = $id_rows['stars'];
                        $release_year = $id_rows['release_year'];
                        $running_time = $id_rows['running_time'];
                        $main_category = $id_rows['main_category'];
                        $sub_category_one = $id_rows['sub_category_one'];
                        $sub_category_two = $id_rows['sub_category_two'];

                        echo "<option value=$movie_id>". $movie_name . " - " . "Movie ID: ". $movie_id . "</option>";
                    }
                    ?>
                </select>
                <br><br>
                <div class="form-row">
                    <div class="col">
                        <input type="submit" class="btn btn-danger btn-block" id="_submit" name="_submit" value="DELETE MOVIE" />
                    </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
