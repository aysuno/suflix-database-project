<?php
// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'SUFLIX';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
    $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
}
else{
    $user_identified_name = "";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8" />
        <title> Insert Movie </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <style>
        .box-color{
            background-color:white;
        }
        .box-insert-color{
            background-color:darkblue;
            color: white;
        }
    </style>
    <body style="background-color: #f6f7fb;">
    <div class="custom container-fluid d-flex align-items-center justify-content-center">
        <div class="row box-color">
            <div class="col mt-5 col-xs-12 col-md-12 col-lg-12">
                <h1 style="text-align:center; color:darkblue;font-weight: bold;">⠀⠀SUFLIX⠀⠀</h1>
                <h2 style="text-align:center">⠀⠀⠀Movie Search⠀⠀⠀</h2>
                <br>

                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="movie_name" name='movie_name' placeholder="Movie Name" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn box-insert-color btn-block" id="_submit" name="_submit" value="Search"/>
                        </div>
                        <br> <br> <br> <br>
                    </div>
                </form>
                <?php

                if(isset($_POST['_submit'])) {
                    $user_identified_name = $_POST['movie_name'];
                    assign($user_identified_name);
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php

}


function assign($name) {
    $user = 'root';
    $password = '';

// Database name is gfg
    $database = 'SUFLIX';

// Server is localhost with
// port number 3308
    $servername='localhost';
    $sql = "SELECT * FROM Movie WHERE movie_name='$name'" ;
    $mysqli = new mysqli($servername, $user,
        $password, $database);
    $result = $mysqli->query($sql);

    if($result != ""){

        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>GFG User Details</title>
            <!-- CSS FOR STYLING THE PAGE -->
            <style>
                table {
                    margin: 0 auto;
                    font-size: large;
                    border: 1px solid black;
                }

                h1 {
                    text-align: center;
                    color: darkblue;
                    font-size: xx-large;
                    font-family: 'Gill Sans', 'Gill Sans MT',
                    ' Calibri', 'Trebuchet MS', 'sans-serif';
                }

                td {
                    background-color: #f6f7fb;
                    border: 1px solid black;
                }

                th,
                td {
                    font-weight: bold;
                    border: 1px solid black;
                    padding: 10px;
                    text-align: center;
                }

                td {
                    font-weight: lighter;
                }
                btn {

                }
            </style>
        </head>

        <body>
        <section>
            <h1>Movie</h1>
            <!-- TABLE CONSTRUCTION-->
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>WRITER</th>
                    <th>DIRECTOR</th>
                    <th>STARS</th>
                    <th>RELEASE YEAR</th>
                    <th>RUNNING TIME</th>
                    <th>MAIN CATEGORY</th>
                    <th>SUB CATEGORY ONE</th>
                    <th>SUB CATEGORY TWO</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                <?php // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
                    ?>
                    <tr>
                        <!--FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN-->
                        <td><?php echo $rows['movie_id'];?></td>
                        <td><?php echo $rows['movie_name'];?></td>
                        <td><?php echo $rows['movie_description'];?></td>
                        <td><?php echo $rows['writer'];?></td>
                        <td><?php echo $rows['director'];?></td>
                        <td><?php echo $rows['stars'];?></td>
                        <td><?php echo $rows['release_year'];?></td>
                        <td><?php echo $rows['running_time'];?></td>
                        <td><?php echo $rows['main_category'];?></td>
                        <td><?php echo $rows['sub_category_one'];?></td>
                        <td><?php echo $rows['sub_category_two'];?></td>





                    </tr>
                    <?php
                }
                ?>
            </table>
        </section>
        </body>

        </html>
        <?php
    }
}


$mysqli->close();
?>
