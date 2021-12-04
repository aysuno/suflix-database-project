<?php

include "config.php";

if (!empty($_POST['username'])){
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];
    $birth_date = $_POST['birth_date'];
    $country = $_POST['country'];
    $category_liked_one = $_POST['category_liked_one'];
    $category_liked_two = $_POST['category_liked_two'];
    $sql_statement = "INSERT INTO Customer (username, sex, phone_number, birth_date, country, category_liked_one, category_liked_two) VALUES ('$username','$sex','$phone_number','$birth_date','$country','$category_liked_one','$category_liked_two')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
}
else
{
    echo "There is missing information! Add process failed.";
}

?>

