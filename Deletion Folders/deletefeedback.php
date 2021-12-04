<?php

include "config.php";

if(!empty($_POST['feedback_id']))
{
    $feedback_id = $_POST['feedback_id'];
    $sql_statement = "DELETE FROM Feedback WHERE feedback_id = $feedback_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Successfully deleted with the code " . $result;
}

?>
