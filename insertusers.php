<?php
$db = mysqli_connect('localhost','root','','SUFLIX');

include "config.php";

if (!empty($_POST['name'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql_statement = "INSERT INTO Users (name, password) VALUES ('$name','$password')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
}
else
{
    echo "You did not enter your name.";
}

?>
