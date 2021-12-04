<?php

include "config.php";

if (!empty($_POST['paymentcard_fullname'])){
    $paymentcard_enddate = $_POST['paymentcard_enddate'];
    $paymentcard_type = $_POST['paymentcard_type'];
    $paymentcard_number = $_POST['paymentcard_number'];
    $paymentcard_fullname = $_POST['paymentcard_fullname'];
    $paymentcard_cvv = $_POST['paymentcard_cvv'];

    $sql_statement = "INSERT INTO Payment (paymentcard_enddate, paymentcard_type, 
        paymentcard_number, paymentcard_fullname, paymentcard_cvv) 
    VALUES ('$paymentcard_enddate','$paymentcard_type', '$paymentcard_number', 
        '$paymentcard_fullname', '$paymentcard_cvv')";

    $result = mysqli_query($db, $sql_statement);
    echo "Succesfully inserted with the code: " . $result;
}
else
{
    echo "You did not enter your name.";
}

?>
