<?php

    include "config.php"; //makes mysql connection

    $sql_statement = "SELECT * FROM Users";
    $result = mysqli_query($db, $sql_statement); //Executing query

    while($row = mysqli_fetch_assoc($result)) { //Fetch and iterate the result
        $Users_name = $row['name'];
        $Users_password = $row['password'];
        $Users_id = $row['id'];
        echo $Users_name . " " . $Users_password . " " . $Users_id . "<br>";
    }

?>
