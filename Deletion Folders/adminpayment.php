<?php

include "config.php";

?>

<form action="deletepayment.php" method="POST">
<select name="Payment_id">

<?php

$sql_command = "SELECT Payment_id, paymentcard_enddate, paymentcard_type, paymentcard_number, paymentcard_fullname, paymentcard_cvv FROM Payment";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Payment_id = $id_rows['Payment_id'];
        $paymentcard_enddate = $id_rows['paymentcard_enddate'];
        $paymentcard_type = $id_rows['paymentcard_type'];
        $paymentcard_number = $id_rows['paymentcard_number'];
        $paymentcard_fullname = $id_rows['paymentcard_fullname'];
        $paymentcard_cvv = $id_rows['paymentcard_cvv'];

        echo "<option value=$Payment_id>". $Payment_id . " - " . $paymentcard_type . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
