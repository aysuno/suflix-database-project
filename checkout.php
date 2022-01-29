<?php
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$id = $_SESSION['id'];
$cart_id = $_GET['cart_id']; // get id through query string
$db = mysqli_connect('localhost','root','','SUFLIX');
include "config.php";

$sql_statement = "SELECT movie_id FROM Added_To WHERE cart_id = '$cart_id'";
$result = mysqli_query($db, $sql_statement);
while ($row = $result->fetch_assoc()) {
    $movie_id = $row['movie_id']; // Print a single column data
    $sql_statement_second = "INSERT INTO Rents (movie_id,id) VALUES ('$movie_id','$id')";
    $result_second = mysqli_query($db, $sql_statement_second);
    $sql_statement_first = "DELETE FROM Added_To WHERE movie_id = '$movie_id' and cart_id = '$cart_id'";
    $result_first = mysqli_query($db, $sql_statement_first);
    $second_sql_statement = "UPDATE Shopping_Cart SET `total_amount`= `total_amount` - 5 WHERE `cart_id` = '$cart_id'";
    $result_second = mysqli_query($db, $second_sql_statement);
    $third_sql_statement= "UPDATE Shopping_Cart SET `no_of_movies`= `no_of_movies` - 1 WHERE `cart_id` = '$cart_id'";
    $result_third = mysqli_query($db, $third_sql_statement);
}

echo "Succesfully payment has finished!!!!: ";
echo "<script> window.location.assign('my_cart.php'); </script>";



