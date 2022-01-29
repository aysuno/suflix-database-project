<?php

include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

if (!empty($_POST['total_amount'])){
    $total_amount = $_POST['total_amount'];
    $no_of_movies = $_POST['no_of_movies'];
    $sql_statement = "INSERT INTO Shopping_Cart (total_amount, no_of_movies) VALUES ('$total_amount','$no_of_movies')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
}
else
{
    echo "There is missing information! Add process failed.";
}

?>
