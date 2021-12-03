<?php

include "config.php";

if(!empty($_POST['Payment_id']))
{
    $payment_id = $_POST['Payment_id'];
    $sql_statement = "DELETE FROM Payment WHERE Payment_id = $Payment_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Successfully deleted with the code " . $result;
}

?>
