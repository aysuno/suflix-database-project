<?php

include "config.php";

?>

<form action="delete.php" method="POST">
<select name="id">

<?php

$sql_command = "SELECT name, password FROM Users";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $name = $id_rows['name'];
        $password = $id_rows['password'];
        echo "<option value=$id>" . $name. " - " . $password . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
