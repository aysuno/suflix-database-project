<?php

include "config.php";

?>

<form action="deletecart.php" method="POST">
<select name="cart_id">

<?php

$sql_command = "SELECT cart_id, total_amount, no_of_movies FROM Shopping_Cart";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $cart_id = $id_rows['cart_id'];
        $total_amount = $id_rows['total_amount'];
        $no_of_movies = $id_rows['no_of_movies'];

        echo "<option value=$cart_id>". $cart_id . " - " . $total_amount . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
