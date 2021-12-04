<?php

include "config.php";

?>

<form action="deletefeedback.php" method="POST">
<select name="Payment_id">

<?php

$sql_command = "SELECT feedback_id, comment, rating FROM Feedback";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $feedback_id = $id_rows['feedback_id'];
        $comment = $id_rows['comment'];
        $rating = $id_rows['rating'];
        
        echo "<option value=$feedback_id>". $feedback_id . " - " . $rating . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
