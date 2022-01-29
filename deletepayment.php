<?php

include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

if(!empty($_POST['Payment_id']))
{
    $Payment_id = $_POST['Payment_id'];
    $sql_statement = "DELETE FROM Payment WHERE Payment_id = $Payment_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Successfully deleted with the code " . $result;
}

?>
