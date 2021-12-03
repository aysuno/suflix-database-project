<?php 

include "config.php";

?>

<form action="deletemovie.php" method="POST">
<select name="movie_id">

<?php

$sql_command = "SELECT movie_id, movie_name, movie_description
                writer, director, stars, release_year, running_time, 
                main_category, sub_category_one, sub_category_two FROM Movie";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $movie_id = $id_rows['movie_id'];
        $movie_name = $id_rows['movie_name'];
        $movie_description = $id_rows['movie_description'];
        $writer = $id_rows['writer'];
        $director = $id_rows['director'];
        $stars = $id_rows['stars'];
        $release_year = $id_rows['release_year'];
        $running_time = $id_rows['running_time'];
        $main_category = $id_rows['main_category'];
        $sub_category_one = $id_rows['sub_category_one'];
        $sub_category_two = $id_rows['sub_category_two'];

        echo "<option value=$movie_id>". $movie_name . " - " . $movie_id . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>