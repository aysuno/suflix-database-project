<?php

$db = mysqli_connect('localhost','root','','suflix_project');

$id = $_GET['feedback_id']; // get id through query string
$sql_statement_first = "DELETE FROM contains WHERE feedback_id = '$id'";
$sql_statement_second = "DELETE FROM gives WHERE feedback_id = '$id'";
$sql_statement_third = "DELETE FROM feedback WHERE feedback_id = '$id'";


$result_first = mysqli_query($db, $sql_statement_first);
$result_second = mysqli_query($db, $sql_statement_second);
$result_third = mysqli_query($db, $sql_statement_third);
if($result_first and $result_second and $result_third)
{
    echo "<script> window.location.assign('user_personal_feedbacks.php'); </script>";
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

