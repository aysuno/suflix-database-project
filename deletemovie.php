<?php

include "config.php";
$db = mysqli_connect('localhost','root','','SUFLIX');

if(!empty($_POST['movie_id']))
{
    $movie_id = $_POST['movie_id'];
    $sql_statement = "DELETE FROM Movie WHERE movie_id = $movie_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Successfully deleted with the code " . $result;
}

?>
