<?php
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$id = $_SESSION['id'];
$movie_id = $_GET['movie_id']; // get id through query string
$db = mysqli_connect('localhost','root','','SUFLIX');
include "config.php";

if (!empty($_POST['comment'])){
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $sql_statement = "INSERT INTO Feedback (comment, rating) VALUES ('$comment','$rating')";
    $result = mysqli_query($db, $sql_statement);
    $sql_statement_second = "SELECT feedback_id FROM Feedback WHERE comment='$comment'";
    $result_second = mysqli_query($db, $sql_statement_second);
    while ($row = $result_second->fetch_assoc()) {
        $feedback_id = $row['feedback_id']; // Print a single column data

    }
// this NEEDS TO BE AT THE TOP of the page before any output etc
    $sql_statement_third = "INSERT INTO Gives (feedback_id, id) VALUES ('$feedback_id','$id')";
    $result_third = mysqli_query($db, $sql_statement_third);

    $sql_statement_fourth= "INSERT INTO Contains_Feedback(feedback_id, movie_id) VALUES ('$feedback_id','$movie_id')";
    $result_fourth = mysqli_query($db, $sql_statement_fourth);
    echo "Succesfully inserted with the code: ";
    echo "<script> window.location.assign('user.php'); </script>";







}


?>
