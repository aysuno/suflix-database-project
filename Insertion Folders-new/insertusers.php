<?php

include "config.php";

if (!empty($_POST['name'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql_statement = "INSERT INTO Users (name, password) VALUES ('$name','$password')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
}
else
{
    echo "There is missing information! Add process failed.";
}

?>
