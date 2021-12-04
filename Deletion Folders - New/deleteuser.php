<?php

include "config.php";

if(!empty($_POST['id']))
{
    $id = $_POST['id'];
    $sql_statement = "DELETE FROM Users WHERE id = $id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
