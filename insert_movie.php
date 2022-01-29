<?php

include "../config.php";

if (!empty($_POST['movie_name'])){
    $movie_name = $_POST['movie_name'];
    $movie_description = $_POST['movie_description'];
    $writer = $_POST['writer'];
    $director = $_POST['director'];
    $stars = $_POST['stars'];
    $release_year = $_POST['release_year'];
    $running_time = $_POST['running_time'];
    $main_category = $_POST['main_category'];
    $sub_category_one = $_POST['sub_category_one'];
    $sub_category_two = $_POST['sub_category_two'];

    $sql_statement = "INSERT INTO Movie (movie_name, movie_description, writer, director, 
        stars, release_year, running_time, main_category, sub_category_one, 
        sub_category_two)
        VALUES ('$movie_name','$movie_description', '$writer', '$director', '$stars', 
            '$release_year', '$running_time', '$main_category', '$sub_category_one', 
            '$sub_category_two')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
}
else
{
    echo "You did not enter your name.";
}

?>
