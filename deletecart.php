<?php
$db = mysqli_connect('localhost','root','','SUFLIX');

include "config.php";

if(!empty($_POST['cart_id']))
{
    $cart_id = $_POST['cart_id'];
    $sql_statement = "DELETE FROM Shopping_Cart WHERE cart_id = $cart_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Successfully deleted with the code " . $result;
}

?>
