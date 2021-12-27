<?php

$db = mysqli_connect('localhost','root','','SUFLIX');

$id = $_GET['Payment_id']; // get id through query string
$sql_statement_first = "DELETE FROM Does WHERE Payment_id = '$id'";
$sql_statement_second = "DELETE FROM Payment WHERE Payment_id = '$id'";
$result_first = mysqli_query($db, $sql_statement_first);
$result_second = mysqli_query($db, $sql_statement_second);

if($result_first and $result_second)
{
    echo "<script> window.location.assign('user_payments.php'); </script>";
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

