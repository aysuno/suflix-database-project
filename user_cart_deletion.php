<?php
$movie_id = $_GET['movie_id']; // get id through query string
$cart_id = $_GET['cart_id']; // get id through query string
$db = mysqli_connect('localhost','root','','SUFLIX');

$sql_statement_first = "DELETE FROM Added_To WHERE movie_id = '$movie_id' and cart_id = '$cart_id'";
$result_first = mysqli_query($db, $sql_statement_first);
$second_sql_statement = "UPDATE Shopping_Cart SET `total_amount`= `total_amount` - 5 WHERE `cart_id` = '$cart_id'";
$result_second = mysqli_query($db, $second_sql_statement);
$third_sql_statement= "UPDATE Shopping_Cart SET `no_of_movies`= `no_of_movies` - 1 WHERE `cart_id` = '$cart_id'";
$result_third = mysqli_query($db, $third_sql_statement);



if($result_first and $result_second)
{
    echo "<script> window.location.assign('my_cart.php'); </script>";
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

