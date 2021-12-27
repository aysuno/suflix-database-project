<?php

include "config.php";

if (!empty($_POST['comment'])){
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $sql_statement = "INSERT INTO Feedback (comment, rating) 
    VALUES ('$comment','$rating')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
    echo "<script> window.location.assign('user_orders.php'); </script>";
}
else
{
    echo "You did not enter your name.";
}

?>
