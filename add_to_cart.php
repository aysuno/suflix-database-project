<?php
$movie_id = $_GET['movie_id'];
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$cart_id = $_SESSION['id'];
$id = $_SESSION['id'];

$db = mysqli_connect('localhost','root','','SUFLIX');

$first_sql_statement = "INSERT INTO Added_To VALUES ('$movie_id', '$cart_id')";
$result_first = mysqli_query($db, $first_sql_statement);
if($result_first){
    $second_sql_statement = "UPDATE Shopping_Cart SET `total_amount`= `total_amount` + 5 WHERE `cart_id` = '$cart_id'";
    $result_second = mysqli_query($db, $second_sql_statement);
    $third_sql_statement= "UPDATE Shopping_Cart SET `no_of_movies`= `no_of_movies` + 1 WHERE `cart_id` = '$cart_id'";
    $result_third = mysqli_query($db, $third_sql_statement);
    if($result_second and $result_third)
    {
        echo "<script> window.location.assign('all_movies.php'); </script>";
    }
}
else{
    echo "Operation is disallowed. You have already added this movie to your cart!!!";
    echo "<script> window.location.assign('all_movies.php'); </script>";
}






// get id through query string




