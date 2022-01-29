<?php

include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

if(!empty($_POST['id']))
{
    $id = $_POST['id'];
    $sql_statement = "DELETE FROM Users WHERE id = $id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
